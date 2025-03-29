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
                categories: ['01 Feb', '02 Feb', '03 Feb', '04 Feb', '05 Feb', '06 Feb', '07 Feb'],
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
