<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabel dengan Grafik Mini</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <style>
        body {
            background-color: #f8f9fa; /* Warna latar belakang halaman */
        }
        .container {
            background-color: #ffffff; /* Warna latar belakang kontainer */
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }
        .table thead th {
            background-color: #343a40;
            color: #ffffff;
        }
        .table tbody tr:hover {
            background-color: #e9ecef; /* Warna latar belakang baris saat hover */
        }
        .chart-container {
            width: 300px; /* Sesuaikan lebar grafik */
            height: 150px; /* Sesuaikan tinggi grafik */
        }
        .chart-container .echarts {
            border-radius: 6px;
        }
    </style>
    <script src="https://cdn.jsdelivr.net/npm/echarts@5/dist/echarts.min.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Tabel dengan Grafik Mini</h1>
        
        <table id="data-table" class="table table-striped table-bordered">
            <thead>
                <tr>
                    <th>User Target</th>
                    <th>Total Count</th>
                    <th>Grafik</th>
                </tr>
            </thead>
            <tbody id="table-body">
                <!-- Data tabel akan diisi di sini -->
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function() {
            // Ambil data dari API Laravel
            $.ajax({
                url: '/api/articles',
                method: 'GET',
                dataType: 'json',
                success: function(data) {
                    console.log('Data received from API:', data); // Debugging line

                    const tableBody = $('#table-body');
                    
                    Object.keys(data).forEach((userTarget, index) => {
                        const records = data[userTarget];
                        
                        // Format data untuk grafik
                        const months = [...new Set(records.map(r => r.month))];
                        const counts = months.map(month => {
                            const record = records.find(r => r.month === month);
                            return record ? record.count : 0;
                        });

                        console.log(`Data for ${userTarget}:`, { months, counts }); // Debugging line

                        const row = $('<tr></tr>');
                        row.html(`
                            <td>${userTarget}</td>
                            <td>${records.reduce((sum, r) => sum + r.count, 0)}</td>
                            <td>
                                <div class="chart-container" id="chart-${index}"></div>
                            </td>
                        `);
                        tableBody.append(row);
                        // Inisialisasi grafik mini
                        const chartDom = document.getElementById(`chart-${index}`);
                        const myChart = echarts.init(chartDom);
                        const option = {
                            xAxis: {
                                type: 'category',
                                data: months,
                                axisLine: { show: false },
                                axisTick: { show: false },
                                axisLabel: { show: false }
                            },
                            yAxis: {
                                type: 'value',
                                axisLine: { show: false },
                                axisTick: { show: false },
                                axisLabel: { show: false },
                                splitLine: { show: false }
                            },
                            series: [{
                                data: counts,
                                type: 'line',
                                smooth: true,
                                areaStyle: {
                                    color: 'rgba(76, 175, 80, 0.2)' // Warna area di bawah garis
                                },
                                itemStyle: {
                                    color: '#4caf50', // Warna garis
                                    borderColor: '#4caf50', // Warna border titik
                                    borderWidth: 2 // Lebar border titik
                                },
                                lineStyle: {
                                    width: 2
                                },
                                symbol: 'circle',
                                symbolSize: 6
                            }]
                        };
                        myChart.setOption(option);
                    });

                    // Inisialisasi DataTables
                    $('#data-table').DataTable();
                },
                error: function(xhr, status, error) {
                    console.error("Error fetching data: ", status, error);
                }
            });
        });
    </script>
</body>
</html>
