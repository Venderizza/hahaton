<div>

    <!-- Line Chart -->
    <div class="py-6" id="pie-chart"></div>



    @script
    <script>
        const getChartOptions = () => {
            return {
                series: [52.8, 26.8, 20.4],
                colors: ["#383435", "#F86161", "#7B0909"],
                chart: {
                    height: 420,
                    width: "60%",
                    type: "pie",
                },
                stroke: {
                    colors: ["#383435", "#F86161", "#7B0909"],
                    lineCap: "",
                },
                plotOptions: {
                    pie: {
                        labels: {
                            show: true,
                        },
                        size: "100%",
                        dataLabels: {
                            offset: -25
                        }
                    },
                },
                labels: ["всего", "удачные", "неудачные"],
                dataLabels: {
                    enabled: true,
                    style: {
                        width: '50px',
                        height: '50px',
                        fontFamily: "Inter, sans-serif",
                    },
                },
                legend: {
                    style: {
                        width: '50px',
                        height: '50px',
                    },
                    position: "right",
                    fontFamily: "Inter, sans-serif",
                },
                yaxis: {
                    labels: {
                        formatter: function (value) {
                            return value + "%"
                        },
                    },
                },
                xaxis: {
                    labels: {
                        formatter: function (value) {
                            return value  + "%"
                        },
                    },
                    axisTicks: {
                        show: false,
                    },
                    axisBorder: {
                        show: false,
                    },
                },
            }
        }

        if (document.getElementById("pie-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("pie-chart"), getChartOptions());
            chart.render();
        }

    </script>
    @endscript

    {{-- The whole world belongs to you. --}}
</div>
