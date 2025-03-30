<div class="flex flex-col xl:flex-row xl:gap-20 justify-between w-full">
<div class=" w-full xl:w-1/2">
    <div id="line-chart"></div>


    @script
    <script>


        const options = {
            chart: {
                height: "100%",
                maxWidth: "100%",
                type: "line",
                fontFamily: "Inter, sans-serif",
                dropShadow: {
                    enabled: false,
                },
                toolbar: {
                    show: false,
                },
            },
            tooltip: {
                enabled: true,
                x: {
                    show: false,
                },
            },
            dataLabels: {
                enabled: false,
            },
            stroke: {
                width: 6,
            },
            grid: {
                show: true,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -26
                },
            },
            series: [
                {
                    name: "Всего",
                    data: [6550, 6428, 6676, 6526, 6418, 6528],
                    color: "#383435",
                },
                {
                    name: "Неудачные",
                    data: [6456, 6356, 6526, 6332, 6396, 6500],
                    color: "#F86161",
                },
                {
                    name: "Удачные",
                    data:  [6500, 6418, 6456, 6526, 6356, 6456],
                    color: "#7B0909",
                },
            ],
            legend: {
                show: false
            },
            stroke: {
                curve: 'smooth'
            },
            xaxis: {
                // categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
                categories: {!!  json_encode($dates) !!},
                labels: {
                    show: true,
                    style: {
                        fontFamily: "Inter, sans-serif",
                        cssClass: 'text-xs font-normal fill-gray-500 dark:fill-gray-400'
                    }
                },
                axisBorder: {
                    show: false,
                },
                axisTicks: {
                    show: false,
                },
            },
            yaxis: {
                show: false,
            },
        }

        if (document.getElementById("line-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("line-chart"), options);
            chart.render();
        }

    </script>
    @endscript


    {{-- To attain knowledge, add things every day; To attain wisdom, subtract things every day. --}}
</div>

    <div class="w-full xl:w-1/2 mt-10 xl:mt-[-30px] flex flex-col gap-y-10">
        <div>

            <div class="flex-col sm:flex-row flex gap-x-5 gap-y-3">
                <button autofocus  wire:click="setDataRange('month')" class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:outline-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Месяц</button>
                <button wire:click="setDataRange('quarter')" class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Квартал</button>
                <button wire:click="setDataRange('quarter')" class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
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

    </div>
</div>
