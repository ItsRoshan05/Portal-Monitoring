<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvController extends Controller
{
    public function show()
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/preprocessing.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        // Convert sentiment values
        $data = $this->convertSentiment($data);

        return view('admin.proses.preprocessing', compact('data'));
    }

    public function showDetail($index)
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/preprocessing.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        // Convert sentiment values
        $data = $this->convertSentiment($data);

        // Ensure index is within bounds
        if (!isset($data[$index])) {
            abort(404);
        }

        return view('admin.proses.detail', ['row' => $data[$index]]);
    }

    protected function readCsv($filePath)
    {
        $rows = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Skip the header row if necessary
            $header = fgetcsv($handle);

            while (($data = fgetcsv($handle)) !== false) {
                $rows[] = array_combine($header, $data);
            }
            fclose($handle);
        }
        return $rows;
    }

    protected function convertSentiment($data)
    {
        return array_map(function ($row) {
            switch ($row['sentiment']) {
                case 0:
                    $row['sentiment'] = 'Netral';
                    break;
                case 1:
                    $row['sentiment'] = 'Positif';
                    break;
                case 2:
                    $row['sentiment'] = 'Negatif';
                    break;
                default:
                    $row['sentiment'] = 'Unknown';
            }
            return $row;
        }, $data);
    }
}
