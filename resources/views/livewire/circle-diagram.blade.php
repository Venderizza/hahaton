<div>

    <div class="flex-col sm:flex-row flex gap-x-5 gap-y-3">
        <button autofocus class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:outline-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Месяц</button>
        <button class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Квартал</button>
        <button class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Год</button>
    </div>

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
                        cssClass: 'w-[50px] h-[50px]',
                        fontFamily: "Inter, sans-serif",
                    },
                },
                legend: {
                    style: {
                        cssClass: 'w-[50px] h-[50px]',
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
