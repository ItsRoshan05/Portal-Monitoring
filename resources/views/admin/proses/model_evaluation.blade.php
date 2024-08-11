@extends('layouts.admin.main')

@section('headingheader')
Model Evaluation
@endsection

@section('mainkoten')
<div class="container">
    <div class="page-inner">
        <div class="row">
            <!-- Metrics Card -->
            <div class="col-md-4">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">MultinomialNB Metrics</h4>
                    </div>
                    <div class="card-body">
                        <ul class="list-group">
                            <li class="list-group-item">
                                <strong>Accuracy:</strong> {{ number_format($accuracy, 2) }}
                            </li>
                            <li class="list-group-item">
                                <strong>Precision:</strong> {{ number_format($precision, 2) }}
                            </li>
                            <li class="list-group-item">
                                <strong>Recall:</strong> {{ number_format($recall, 2) }}
                            </li>
                            <li class="list-group-item">
                                <strong>F1 Score:</strong> {{ number_format($f1_score, 2) }}
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Confusion Matrix Card -->
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Confusion Matrix</h4>
                    </div>
                    <div class="card-body">
                        <div id="confusionMatrixChart" style="height: 400px;"></div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row mt-4">
            <!-- Classification Report Table -->
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <h4 class="card-title">Classification Report</h4>
                    </div>
                    <div class="card-body">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>Class</th>
                                    <th>Precision</th>
                                    <th>Recall</th>
                                    <th>F1-Score</th>
                                    <th>Support</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($classificationReport as $row)
                                <tr>
                                    <td>{{ $row['class'] }}</td>
                                    <td>{{ number_format($row['precision'], 2) }}</td>
                                    <td>{{ number_format($row['recall'], 2) }}</td>
                                    <td>{{ number_format($row['f1_score'], 2) }}</td>
                                    <td>{{ $row['support'] }}</td>
                                </tr>
                                @endforeach
                                <tr>
                                    <td><strong>Accuracy</strong></td>
                                    <td colspan="4">{{ number_format($accuracy, 2) }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Macro Avg</strong></td>
                                    <td>{{ number_format($macroAvg['precision'], 2) }}</td>
                                    <td>{{ number_format($macroAvg['recall'], 2) }}</td>
                                    <td>{{ number_format($macroAvg['f1_score'], 2) }}</td>
                                    <td>{{ $macroAvg['support'] }}</td>
                                </tr>
                                <tr>
                                    <td><strong>Weighted Avg</strong></td>
                                    <td>{{ number_format($weightedAvg['precision'], 2) }}</td>
                                    <td>{{ number_format($weightedAvg['recall'], 2) }}</td>
                                    <td>{{ number_format($weightedAvg['f1_score'], 2) }}</td>
                                    <td>{{ $weightedAvg['support'] }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/echarts/dist/echarts.min.js"></script>
<script>
    document.addEventListener('DOMContentLoaded', function() {
        const confusionMatrix = @json($confusionMatrix);

        var chart = echarts.init(document.getElementById('confusionMatrixChart'));
        var option = {
            tooltip: {},
            grid: {
                left: '10%',
                right: '10%',
                bottom: '10%',
                top: '15%'
            },
            xAxis: {
                type: 'category',
                data: ['0', '1', '2'],
                name: 'Predicted Class',
                nameLocation: 'middle',
                nameGap: 20
            },
            yAxis: {
                type: 'category',
                data: ['0', '1', '2'],
                name: 'True Class',
                nameLocation: 'middle',
                nameGap: 20
            },
            visualMap: {
                min: 0,
                max: Math.max(...confusionMatrix.flat()),
                calculable: true,
                orient: 'horizontal',
                left: 'center',
                bottom: '5%'
            },
            series: [{
                name: 'Confusion Matrix',
                type: 'heatmap',
                data: confusionMatrix.flatMap((row, i) => row.map((value, j) => [j, i, value])),
                label: {
                    show: true
                }
            }]
        };
        chart.setOption(option);
    });
</script>
@endsection
