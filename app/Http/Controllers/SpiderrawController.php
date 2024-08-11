<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\SpiderRaw;
use Illuminate\Support\Facades\DB;

class SpiderrawController extends Controller
{
    //
    public function index()
    {
        // Ambil data dari database dan kelompokkan berdasarkan user_target dan waktu
        $data = SpiderRaw::select(
                'user_target',
                DB::raw('DATE_FORMAT(created_at, "%Y-%m") as month'),
                DB::raw('COUNT(*) as count')
            )
            ->groupBy('user_target', 'month')
            ->orderBy('user_target')
            ->orderBy('month')
            ->get()
            ->groupBy('user_target');
        
        // Hitung pertumbuhan data
        $result = $data->map(function ($records) {
            $records = $records->sortBy('month')->values();
            $growth = [];
    
            for ($i = 1; $i < count($records); $i++) {
                $previousRecord = $records[$i - 1];
                $currentRecord = $records[$i];
    
                $percentageChange = $previousRecord->count > 0 ? 
                    (($currentRecord->count - $previousRecord->count) / $previousRecord->count) * 100 : 0;
    
                $growth[] = [
                    'month' => $currentRecord->month,
                    'count' => $currentRecord->count,
                    'growth' => $percentageChange
                ];
            }
    
            return [
                'records' => $records,
                'growth' => $growth
            ];
        });
    
        return response()->json($result);
    }
    
}
