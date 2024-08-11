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
@endsection

@section('js')
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<script>
document.addEventListener('DOMContentLoaded', function() {
    // Data for user statistics
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
            datasets: [
                {
                    label: 'Casual',
                    data: casualData,
                    borderColor: 'rgba(75, 192, 192, 1)', // Warna border garis
                    backgroundColor: 'rgba(75, 192, 192, 0.2)', // Warna latar belakang area di bawah garis
                    fill: true, // Isi area di bawah garis
                    tension: 0.4, // Kemiringan garis lebih lembut
                    borderWidth: 3, // Lebar border garis
                    pointRadius: 6, // Ukuran titik data
                    pointBackgroundColor: 'rgba(75, 192, 192, 1)', // Warna titik data
                    pointBorderColor: '#fff', // Warna border titik data
                    pointBorderWidth: 2 // Lebar border titik data
                },
                {
                    label: 'Premium',
                    data: premiumData,
                    borderColor: 'rgba(255, 99, 132, 1)', // Warna border garis
                    backgroundColor: 'rgba(255, 99, 132, 0.2)', // Warna latar belakang area di bawah garis
                    fill: true, // Isi area di bawah garis
                    tension: 0.4, // Kemiringan garis lebih lembut
                    borderWidth: 3, // Lebar border garis
                    pointRadius: 6, // Ukuran titik data
                    pointBackgroundColor: 'rgba(255, 99, 132, 1)', // Warna titik data
                    pointBorderColor: '#fff', // Warna border titik data
                    pointBorderWidth: 2 // Lebar border titik data
                },
                {
                    label: 'Sultan',
                    data: sultanData,
                    borderColor: 'rgba(255, 159, 64, 1)', // Warna border garis
                    backgroundColor: 'rgba(255, 159, 64, 0.2)', // Warna latar belakang area di bawah garis
                    fill: true, // Isi area di bawah garis
                    tension: 0.4, // Kemiringan garis lebih lembut
                    borderWidth: 3, // Lebar border garis
                    pointRadius: 6, // Ukuran titik data
                    pointBackgroundColor: 'rgba(255, 159, 64, 1)', // Warna titik data
                    pointBorderColor: '#fff', // Warna border titik data
                    pointBorderWidth: 2 // Lebar border titik data
                }
            ]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                    labels: {
                        boxWidth: 12, // Ukuran box di legend
                        padding: 10 // Padding di legend
                    }
                },
                tooltip: {
                    backgroundColor: '#fff',
                    titleColor: '#000',
                    bodyColor: '#000',
                    borderColor: '#ddd',
                    borderWidth: 1,
                    caretSize: 6, // Ukuran 'caret' tooltip
                    callbacks: {
                        label: function(tooltipItem) {
                            return tooltipItem.dataset.label + ': ' + tooltipItem.raw;
                        }
                    }
                }
            },
            scales: {
                x: {
                    title: {
                        display: true,
                        text: 'Month',
                        font: {
                            size: 14
                        }
                    },
                    ticks: {
                        autoSkip: true,
                        maxTicksLimit: 12 // Batasi jumlah ticks di sumbu X
                    }
                },
                y: {
                    title: {
                        display: true,
                        text: 'Number of Users',
                        font: {
                            size: 14
                        }
                    },
                    beginAtZero: true,
                    ticks: {
                        stepSize: 5, // Langkah nilai di sumbu Y
                        callback: function(value) {
                            return value.toLocaleString(); // Format angka dengan pemisah ribuan
                        }
                    }
                }
            }
        }
    });
});

document.addEventListener('DOMContentLoaded', function() {
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
                        '#ff6384',
                        '#36a2eb',
                        '#ffce56',
                        '#4bc0c0',
                        '#f7786b'
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
                            label: function(tooltipItem) {
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
    border-radius: 10px; /* Menambahkan sudut melengkung pada chart */
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2); /* Menambahkan bayangan */
}
</style>
@endsection