<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use Illuminate\Support\Facades\DB;
class DashboardController extends Controller
{
    //
    public function index(){
        // Ambil data dari tabel spider_raw dan proses menjadi kata-kata individual
        $textData = DB::table('spider_raw')
            ->pluck('judul')
            ->implode(' '); // Gabungkan semua judul menjadi satu string


// Tokenisasi: Pecah teks menjadi kata-kata
$kata = str_word_count($textData, 1); // Menghasilkan array kata-kata

// Hitung frekuensi kata
$wordCounts = array_count_values($kata);

// Konversi data untuk Word Cloud
$katas = collect($wordCounts)
    ->map(fn($count, $word) => [$word, $count]) // Convert to [word, count] array
    ->sortByDesc(fn($pair) => $pair[1]) // Sortir berdasarkan frekuensi (nilai dalam array [word, count])
    ->values(); // Menghapus kunci array dan mendapatkan array numerik
        // Tokenisasi: Pecah teks menjadi kata-kata
        $words = str_word_count($textData, 1); // Menghasilkan array kata-kata

        // Hitung frekuensi kata
        $wordCounts = array_count_values($words);

        // Urutkan kata berdasarkan frekuensi secara menurun
        arsort($wordCounts);

        // Ambil 5 kata kunci teratas
        $topWords = array_slice($wordCounts, 0, 5, true);

        // Konversi data untuk Word Cloud dan Chart.js
        $keywords = array_map(fn($word, $count) => [$word, $count], array_keys($topWords), $topWords);

        $chartLabels = array_column($keywords, 0);
        $chartData = array_column($keywords, 1);

     return view('client.index', [
        'keywords' => $keywords,
        'chartLabels' => $chartLabels,
        'chartData' => $chartData,
        'katas' => $katas
    ]);
    }

    public function predict(Request $request)
    {
        $client = new Client([
            'verify' => false
        ]);
        
        $response = $client->post('https://itsroshan05.pythonanywhere.com/predict', [
            'json' => ['text' => $request->input('text')]
        ]);
        
        $result = json_decode($response->getBody(), true);
        $prediction = $result['prediction'];

        // Ambil data dari tabel spider_raw dan proses menjadi kata-kata individual
        $textData = DB::table('spider_raw')
            ->pluck('judul')
            ->implode(' '); // Gabungkan semua judul menjadi satu string


// Tokenisasi: Pecah teks menjadi kata-kata
$kata = str_word_count($textData, 1); // Menghasilkan array kata-kata

// Hitung frekuensi kata
$wordCounts = array_count_values($kata);

// Konversi data untuk Word Cloud
$katas = collect($wordCounts)
    ->map(fn($count, $word) => [$word, $count]) // Convert to [word, count] array
    ->sortByDesc(fn($pair) => $pair[1]) // Sortir berdasarkan frekuensi (nilai dalam array [word, count])
    ->values(); // Menghapus kunci array dan mendapatkan array numerik
        // Tokenisasi: Pecah teks menjadi kata-kata
        $words = str_word_count($textData, 1); // Menghasilkan array kata-kata

        // Hitung frekuensi kata
        $wordCounts = array_count_values($words);

        // Urutkan kata berdasarkan frekuensi secara menurun
        arsort($wordCounts);

        // Ambil 5 kata kunci teratas
        $topWords = array_slice($wordCounts, 0, 5, true);

        // Konversi data untuk Word Cloud dan Chart.js
        $keywords = array_map(fn($word, $count) => [$word, $count], array_keys($topWords), $topWords);

        $chartLabels = array_column($keywords, 0);
        $chartData = array_column($keywords, 1);


        
    return view('client.index', compact('prediction','keywords','chartLabels','chartData','katas'));
    }
}
