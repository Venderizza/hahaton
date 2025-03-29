<div class="flex flex-col xl:flex-row gap-y-10 gap-x-10 2xl:gap-x-20">


    <div class="h-full w-full xl:w-4/5">
        <div id="column-chart"></div>
    </div>


    <div class="w-full xl:w-1/5">

        <div class="flex flex-wrap gap-x-5 gap-y-3 mb-10">
            <button autofocus class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:outline-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Месяц</button>
            <button class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Квартал</button>
            <button class="py-1 px-7 rounded-3xl border-2 border-[#383435] focus:bg-[#383435] hover:bg-[#383435]
                         focus:text-white hover:text-white transition duration-600">Год</button>
        </div>

        <div class="">
            <div class="space-y-4">
                <div class="flex items-center">
                    <div class="size-5 bg-[#D8443A] rounded-full mr-2"></div>
                    <span>Переход в Горячие</span>
                </div>
                <div class="flex items-center">
                    <div class="size-5 bg-[#DF6D44] rounded-full mr-2"></div>
                    <span>Переход в Теплые</span>
                </div>
                <div class="flex items-center">
                    <div class="size-5 bg-[#98857E] rounded-full mr-2"></div>
                    <span>Переход в Холодные</span>
                </div>
            </div>
        </div>
    </div>


    @script
    <script>
        const options = {
            colors: ["#1A56DB", "#FDBA8C"],
            series: [
                {
                    name: "Теплые-Горячие",
                    color: "#D8443A",
                    data: [
                        {x: "Mon", y: 231},
                        {x: "Tue", y: 162},
                        {x: "Wed", y: 63},
                        {x: "Thu", y: 321},
                        {x: "Fri", y: 128},
                        {x: "Sat", y: 323},
                        {x: "Sun", y: 111},
                    ],
                },
                {
                    name: "Горячие-Теплые",
                    color: "#DF6D44",
                    data: [
                        {x: "Mon", y: 242},
                        {x: "Tue", y: 113},
                        {x: "Wed", y: 301},
                        {x: "Thu", y: 224},
                        {x: "Fri", y: 212},
                        {x: "Sat", y: 411},
                        {x: "Sun", y: 243},
                    ],
                },

                {
                    name: "Теплые-Холодные",
                    color: "#98857E",
                    data: [
                        {x: "Mon", y: 211},
                        {x: "Tue", y: 92},
                        {x: "Wed", y: 43},
                        {x: "Thu", y: 391},
                        {x: "Fri", y: 162},
                        {x: "Sat", y: 303},
                        {x: "Sun", y: 121},
                    ],
                },
                {
                    name: "Холодные-Теплые",
                    color: "#DF6D44",
                    data: [
                        {x: "Mon", y: 231},
                        {x: "Tue", y: 22},
                        {x: "Wed", y: 63},
                        {x: "Thu", y: 421},
                        {x: "Fri", y: 102},
                        {x: "Sat", y: 223},
                        {x: "Sun", y: 111},
                    ],
                },

                {
                    name: "Горячие-Холодные",
                    color: "#98857E",
                    data: [
                        {x: "Mon", y: 201},
                        {x: "Tue", y: 150},
                        {x: "Wed", y: 63},
                        {x: "Thu", y: 61},
                        {x: "Fri", y: 142},
                        {x: "Sat", y: 121},
                        {x: "Sun", y: 111},
                    ],
                },
                {
                    name: "Холодные-Горячие",
                    color: "#D8443A",
                    data: [
                        {x: "Mon", y: 121},
                        {x: "Tue", y: 142},
                        {x: "Wed", y: 63},
                        {x: "Thu", y: 441},
                        {x: "Fri", y: 122},
                        {x: "Sat", y: 209},
                        {x: "Sun", y: 111},
                    ],
                },
            ],
            chart: {
                type: "bar",
                height: "320px",
                fontFamily: "Inter, sans-serif",
                toolbar: {
                    show: false,
                },
            },
            plotOptions: {
                bar: {
                    horizontal: false,
                    columnWidth: "70%",
                    borderRadiusApplication: "end",
                    borderRadius: 8,
                },
            },
            tooltip: {
                shared: true,
                intersect: false,
                style: {
                    fontFamily: "Inter, sans-serif",
                },
            },
            states: {
                hover: {
                    filter: {
                        type: "darken",
                        value: 1,
                    },
                },
            },
            stroke: {
                show: true,
                width: 0,
                colors: ["transparent"],
            },
            grid: {
                show: false,
                strokeDashArray: 4,
                padding: {
                    left: 2,
                    right: 2,
                    top: -14
                },
            },
            dataLabels: {
                enabled: false,
            },
            legend: {
                show: false,
            },
            xaxis: {
                floating: false,
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
            fill: {
                opacity: 1,
            },
        }

        if (document.getElementById("column-chart") && typeof ApexCharts !== 'undefined') {
            const chart = new ApexCharts(document.getElementById("column-chart"), options);
            chart.render();
        }

    </script>
    @endscript
    {{-- In work, do what you enjoy. --}}
</div>
