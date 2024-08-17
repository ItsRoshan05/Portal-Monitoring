@extends('layouts.admin.main')

@section('headingheader')
Dashboard
@endsection


@section('mainkoten')
<div class="row">
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-primary bubble-shadow-small">
                            <i class="fas fa-users"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Total Users</p>
                            <h4 class="card-title">{{ $totalUsers }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-info bubble-shadow-small">
                            <i class="fas fa-bullseye"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Total Target</p>
                            <h4 class="card-title">{{ $totalTargetscrap }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-success bubble-shadow-small">
                            <i class="fas fa-link"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Total Scraping</p>
                            <h4 class="card-title">{{ $totalScraping }}</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-sm-6 col-md-3">
        <div class="card card-stats card-round">
            <div class="card-body">
                <div class="row align-items-center">
                    <div class="col-icon">
                        <div class="icon-big text-center icon-secondary bubble-shadow-small">
                            <i class="far fa-check-circle"></i>
                        </div>
                    </div>
                    <div class="col col-stats ms-3 ms-sm-0">
                        <div class="numbers">
                            <p class="card-category">Data Pelatihan</p>
                            <h4 class="card-title">150</h4>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-8">
        <div class="card card-round">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">User Growth Per Month</div>
                    <div class="card-tools">
                        <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                            <span class="btn-label">
                                <i class="fa fa-pencil"></i>
                            </span>
                            Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                            <span class="btn-label">
                                <i class="fa fa-print"></i>
                            </span>
                            Print
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 375px">
                    <canvas id="statisticsChart"></canvas>
                </div>
                <div id="myChartLegend"></div>
            </div>
        </div>
    </div>
    <div class="col-md-4">
        <div class="card card-round">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Sentiment Distribution</div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 375px">
                    <canvas id="sentimentChart"></canvas>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">

        <div class="card card-round">
            <div class="card-header">
                <div class="card-head-row">
                    <div class="card-title">Sentiment Berdasarkan Target</div>
                    <div class="card-tools">
                        <a href="#" class="btn btn-label-success btn-round btn-sm me-2">
                            <span class="btn-label">
                                <i class="fa fa-pencil"></i>
                            </span>
                            Export
                        </a>
                        <a href="#" class="btn btn-label-info btn-round btn-sm">
                            <span class="btn-label">
                                <i class="fa fa-print"></i>
                            </span>
                            Print
                        </a>
                    </div>
                </div>
            </div>
            <div class="card-body">
                <div class="chart-container" style="min-height: 375px">
                    <canvas id="sentimentUserTarget"></canvas>
                </div>
            </div>
        </div>

    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="card">
            <div class="card-header d-flex justify-content-between align-items-center">
                <h4 class="card-title mb-0">Data Ter Prediksi Netral</h4>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table id="basic-datatables" class="display table table-striped table-hover">
                        <thead>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th> <!-- Tambahkan kolom judul -->
                                <th>Target</th>
                                <th>Proses</th>
                                <th>Sentiment</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>ID</th>
                                <th>Judul</th> <!-- Tambahkan kolom judul -->
                                <th>Target</th>
                                <th>Proses</th>
                                <th>Sentiment</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach($dataNetral as $item)
                                <tr>
                                    <td>{{ $item->id }}</td>
                                    <td>{{ $item->spiderRaw->judul ?? 'Tidak ada judul' }}
                                    <td>{{ $item->spiderRaw->user_target ?? 'Tidak ada judul' }}

                                    </td>
                                    <!-- Ambil judul dari relasi -->
                                    <td>{{ $item->proses }}</td>
                                    <td>{{ $item->sentiment }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
    // Data from Laravel
    var growthData = @json($growthData);

    // Prepare labels and datasets
    var labels = [];
    var positiveData = [];
    var neutralData = [];
    var negativeData = [];

    growthData.forEach(function (item) {
        labels.push(item.user_target);
        positiveData.push(item.positive || 0);
        neutralData.push(item.neutral || 0);
        negativeData.push(item.negative || 0);
    });

    // Chart.js Configuration
    var ctx = document.getElementById('sentimentUserTarget').getContext('2d');
    var sentimentChart = new Chart(ctx, {
        type: 'bar', // Use 'bar' for categorical x-axis
        data: {
            labels: labels,
            datasets: [{
                    label: 'Positif',
                    borderColor: '#663399', // Ungu tua
                    backgroundColor: '#663399', // Ungu tua
                    data: positiveData
                },
                {
                    label: 'Netral',
                    borderColor: '#9966CC', // Ungu muda
                    backgroundColor: '#9966CC', // Ungu muda
                    data: neutralData
                },
                {
                    label: 'Negatif',
                    borderColor: '#FFD700', // Emas
                    backgroundColor: '#FFD700', // Emas
                    data: negativeData
                }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                x: {
                    type: 'category', // Make sure x-axis is categorical
                    beginAtZero: false
                },
                y: {
                    beginAtZero: true
                }
            },
            plugins: {
                legend: {
                    display: true
                },
                tooltip: {
                    callbacks: {
                        label: function (tooltipItem) {
                            return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            }
        }
    });

</script>


<script>
    $(document).ready(function () {
        $("#basic-datatables").DataTable();
    });

</script>

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Data untuk user statistics
    const userStatistics = @json($userStatistics);
    const labels = Object.keys(userStatistics);
    const casualData = labels.map(month => userStatistics[month]['casual'] || 0);
    const premiumData = labels.map(month => userStatistics[month]['premium'] || 0);
    const sultanData = labels.map(month => userStatistics[month]['sultan'] || 0);

    // Create statistics chart
    const ctx = document.getElementById('statisticsChart').getContext('2d');
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: labels,
            datasets: [{
                label: 'Casual',
                data: casualData,
                borderColor: 'rgba(34, 139, 34, 1)', // Hijau tua
                backgroundColor: 'rgba(34, 139, 34, 0.2)',
                fill: true,
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 6,
                pointBackgroundColor: 'rgba(34, 139, 34, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2
            },
            {
                label: 'Premium',
                data: premiumData,
                borderColor: 'rgba(0, 100, 0, 1)', // Hijau tua lebih gelap
                backgroundColor: 'rgba(0, 100, 0, 0.2)',
                fill: true,
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 6,
                pointBackgroundColor: 'rgba(0, 100, 0, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2
            },
            {
                label: 'Sultan',
                data: sultanData,
                borderColor: 'rgba(50, 205, 50, 1)', // Hijau tua lebih terang
                backgroundColor: 'rgba(50, 205, 50, 0.2)',
                fill: true,
                tension: 0.4,
                borderWidth: 3,
                pointRadius: 6,
                pointBackgroundColor: 'rgba(50, 205, 50, 1)',
                pointBorderColor: '#fff',
                pointBorderWidth: 2
            }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 12,
                        padding: 10
                    }
                },
                tooltip: {
                    // ... konfigurasi tooltip
                }
            },
            scales: {
                x: {
                    // ... konfigurasi sumbu x
                },
                y: {
                    // ... konfigurasi sumbu y
                }
            },
            elements: {
                line: {
                    tension: 0.4,
                    fill: true
                }
            }
        }
    });
});


    document.addEventListener('DOMContentLoaded', function () {
        const sentimentData = @json($sentimentData);

        // Prepare data for pie chart
        const labels = Object.keys(sentimentData);
        const data = Object.values(sentimentData);

        var ctx = document.getElementById('sentimentChart').getContext('2d');

        new Chart(ctx, {
            type: 'doughnut', // Change to 'pie' for a pie chart
            data: {
                labels: labels,
                datasets: [{
                    label: 'Sentiment Distribution',
                    data: data,
                    backgroundColor: [
                        '#023047', // Dark blue
                        '#F26419', // Orange
                        '#6C5B7B', // Purple
                        '#E75480', // Pink
                        '#41B3A3' // Teal
                    ],
                    borderWidth: 1
                }]
            },
            options: {
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    tooltip: {
                        callbacks: {
                            label: function (tooltipItem) {
                                return tooltipItem.label + ': ' + tooltipItem.raw;
                            }
                        }
                    }
                }
            }
        });
    });

</script>
@endsection

@section('css')
<style>
    #statisticsChart {
        border-radius: 10px;
        /* Menambahkan sudut melengkung pada chart */
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        /* Menambahkan bayangan */
    }

</style>
@endsection
