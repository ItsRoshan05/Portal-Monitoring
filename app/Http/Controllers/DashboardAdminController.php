<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TargetUser;
use App\Models\SpiderRaw;
use Illuminate\Support\Facades\DB;

class DashboardAdminController extends Controller
{
    //
    public function index()
    {
        $user = auth()->user(); // Ambil user yang sedang login
        $level = $user->level;  // Ambil level user
        
        $totalUsers = User::count();
        $totalTargetscrap = TargetUser::count();
        $totalScraping = SpiderRaw::count();

        $userStatistics = User::selectRaw('
        DATE_FORMAT(created_at, "%Y-%m") as month,
        SUM(CASE WHEN level = "casual" THEN 1 ELSE 0 END) as casual,
        SUM(CASE WHEN level = "premium" THEN 1 ELSE 0 END) as premium,
        SUM(CASE WHEN level = "sultan" THEN 1 ELSE 0 END) as sultan
    ')
    ->groupBy('month')
    ->orderBy('month')
    ->get()
    ->keyBy('month')
    ->map(function ($item) {
        return [
            'casual' => $item->casual,
            'premium' => $item->premium,
            'sultan' => $item->sultan
        ];
    });

    $sentimentData = DB::table('spider_raw')
    ->select('sentiment', DB::raw('count(*) as total'))
    ->groupBy('sentiment')
    ->pluck('total', 'sentiment')
    ->toArray();

        // Cek level user dan arahkan ke tampilan yang sesuai
        if ($level === 'admin' || $level === 'superadmin') {
            return view('admin.dashboard', compact('totalUsers','totalTargetscrap','totalScraping','userStatistics', 'sentimentData')); // Tampilan untuk admin dan superadmin
        } else {
            return view('admin.dashboardcasual'); // Tampilan untuk level lainnya
        }
    }
}
