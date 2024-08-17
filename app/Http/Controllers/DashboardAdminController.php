<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\TargetUser;
use App\Models\SpiderRaw;
use Illuminate\Support\Facades\DB;
use App\Models\Predicted;

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

    // Query untuk mendapatkan pertumbuhan sentiment berdasarkan user_target
    $growthData = DB::table('predicted')
    ->join('spider_raw', 'predicted.id_spider_raw', '=', 'spider_raw.id')
    ->select(
        'spider_raw.user_target',
        DB::raw('SUM(CASE WHEN predicted.sentiment = 1 THEN 1 ELSE 0 END) as positive'),
        DB::raw('SUM(CASE WHEN predicted.sentiment = 0 THEN 1 ELSE 0 END) as neutral'),
        DB::raw('SUM(CASE WHEN predicted.sentiment = 2 THEN 1 ELSE 0 END) as negative')
    )
    ->groupBy('spider_raw.user_target')
    ->get();


    $sentimentData = DB::table('predicted')
    ->select('sentiment', DB::raw('count(*) as total'))
    ->groupBy('sentiment')
    ->pluck('total', 'sentiment')
    ->toArray();

    $dataNetral = Predicted::where('sentiment',0)->with('spiderRaw')->get();

        // Cek level user dan arahkan ke tampilan yang sesuai
        if ($level === 'admin' || $level === 'superadmin') {
            return view('admin.dashboard', compact('totalUsers','totalTargetscrap','totalScraping','userStatistics', 'sentimentData','dataNetral','growthData')); // Tampilan untuk admin dan superadmin
        } else {
            return view('admin.dashboardcasual'); // Tampilan untuk level lainnya
        }
    }
}
