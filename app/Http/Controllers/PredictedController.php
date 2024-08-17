<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Predicted;
class PredictedController extends Controller
{
    //
    // Metode untuk API
    public function apiIndex(Request $request)
    {
        // Ambil data Predicted beserta relasi SpiderRaw
        $predictedItems = Predicted::with('spiderRaw')->get();

        // Kembalikan data dalam format JSON
        return response()->json($predictedItems);
    }

    // Metode untuk tampilan web
    public function index()
    {
        // Ambil data Predicted beserta relasi SpiderRaw
        $predictedItems = Predicted::with('spiderRaw')->get();

        // Kembalikan view dengan data
        return view('admin.predicted.index', compact('predictedItems'));
    }
}
