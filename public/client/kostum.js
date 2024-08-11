$(document).ready(function () {
    $.ajax({
        url: '/api/articles',
        method: 'GET',
        dataType: 'json',
        success: function (data) {
            const tableBody = $('#table-body');
            tableBody.empty(); // Clear existing rows

            Object.keys(data).forEach((userTarget, index) => {
                const records = data[userTarget].records;
                const growth = data[userTarget].growth;

                // Prepare data for the chart
                const months = [...new Set(records.map(r => r.month))];
                const counts = months.map(month => {
                    const record = records.find(r => r.month === month);
                    return record ? record.count : 0;
                });

                // Get the latest growth value
                const latestGrowth = growth.length > 0 ? growth[growth.length - 1].growth.toFixed(2) : 'N/A';

                const row = $('<tr></tr>');
                row.html(`
                <td>${userTarget}</td>
                <td>${records.reduce((sum, r) => sum + r.count, 0)}</td>
                <td>
                    <div class="chart-container" id="chart-${index}"></div>
                </td>
                <td>
                    <div class="growth" style="color: green;">${latestGrowth} %</div>
                </td>
            `);
                tableBody.append(row);

                // Initialize mini chart
                const chartDom = document.getElementById(`chart-${index}`);
                const myChart = echarts.init(chartDom);
                const option = {
                    xAxis: {
                        type: 'category',
                        data: months,
                        axisLine: {
                            show: false
                        },
                        axisTick: {
                            show: false
                        },
                        axisLabel: {
                            show: false
                        }
                    },
                    yAxis: {
                        type: 'value',
                        axisLine: {
                            show: false
                        },
                        axisTick: {
                            show: false
                        },
                        axisLabel: {
                            show: false
                        },
                        splitLine: {
                            show: false
                        }
                    },
                    series: [{
                        data: counts,
                        type: 'line',
                        smooth: true,
                        areaStyle: {
                            color: 'rgba(76, 175, 80, 0.2)'
                        },
                        itemStyle: {
                            color: '#4caf50',
                            borderColor: '#4caf50',
                            borderWidth: 2
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

            // Initialize DataTables
            $('#data-table').DataTable({
                "paging": true,
                "searching": true,
                "ordering": true
            });
        },
        error: function (xhr, status, error) {
            console.error("Error fetching data: ", status, error);
        }
    });
});
