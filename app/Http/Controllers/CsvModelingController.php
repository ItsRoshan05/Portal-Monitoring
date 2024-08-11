<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CsvModelingController extends Controller
{
    //
    public function showxtest()
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/data_xtest_clear.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        return view('admin.proses.modelingxtest', compact('data'));
    }

    public function showDetailXtest($index)
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/data_xtest_clear.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);


        // Ensure index is within bounds
        if (!isset($data[$index])) {
            abort(404);
        }

        return view('admin.proses.detailxtest', ['row' => $data[$index]]);
    }

    public function showxtrain()
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/dataxtrainclear.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        // Convert sentiment values
        $data = $this->convertSentiment($data);

        return view('admin.proses.modelingxtrain', compact('data'));
    }

    public function showDetailXtrain($index)
    {
        // Path to the CSV file in storage folder
        $filePath = storage_path('app/public/dataxtrainclear.csv');

        // Read CSV file
        $data = $this->readCsv($filePath);

        // Convert sentiment values
        $data = $this->convertSentiment($data);

        // Ensure index is within bounds
        if (!isset($data[$index])) {
            abort(404);
        }

        return view('admin.proses.detailxtrain', ['row' => $data[$index]]);
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

    public function showEvaluation()
{
    $accuracy = 0.7333333333333333;
    $precision = 0.8222222222222222;
    $recall = 0.7333333333333333;
    $f1_score = 0.706031746031746;
    $confusionMatrix = [
        [8, 0, 0],
        [3, 2, 0],
        [1, 0, 1]
    ];

    $classificationReport = [
        ['class' => '0', 'precision' => 0.67, 'recall' => 1.00, 'f1_score' => 0.80, 'support' => 8],
        ['class' => '1', 'precision' => 1.00, 'recall' => 0.40, 'f1_score' => 0.57, 'support' => 5],
        ['class' => '2', 'precision' => 1.00, 'recall' => 0.50, 'f1_score' => 0.67, 'support' => 2],
    ];

    $macroAvg = ['precision' => 0.89, 'recall' => 0.63, 'f1_score' => 0.68, 'support' => 15];
    $weightedAvg = ['precision' => 0.82, 'recall' => 0.73, 'f1_score' => 0.71, 'support' => 15];

    return view('admin.proses.model_evaluation', compact('accuracy', 'precision', 'recall', 'f1_score', 'confusionMatrix', 'classificationReport', 'macroAvg', 'weightedAvg'));
}

    
}
