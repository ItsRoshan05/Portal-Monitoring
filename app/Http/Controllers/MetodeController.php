<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MetodeController extends Controller
{
    //
    public function showtfidf()
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/output1.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        // Convert sentiment values
        $data = $this->convertSentiment($data);

        return view('admin.proses.metodetfidf', compact('data'));
    }

    public function showdetailtfidf ($index)
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/output1.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        // Convert sentiment values
        $data = $this->convertSentiment($data);


        // Ensure index is within bounds
        if (!isset($data[$index])) {
            abort(404);
        }

        return view('admin.proses.detailtfidf', ['row' => $data[$index]]);
    }

    protected function readCsv($filePath)
    {
        $rows = [];
        if (($handle = fopen($filePath, 'r')) !== false) {
            // Skip the header row if necessary
            $header = fgetcsv($handle);
    
            if ($header === false) {
                // Handle the case where the header cannot be read
                return $rows;
            }
    
            while (($data = fgetcsv($handle)) !== false) {
                if (count($header) === count($data)) {
                    $rows[] = array_combine($header, $data);
                } else {
                }
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
