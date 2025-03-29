import './bootstrap';


// Динамика заявок
const requestsCtx = document.getElementById('requestsChart').getContext('2d');
const requestsChart = new Chart(requestsCtx, {
    type: 'bar',
    data: {
        labels: ['Теплые-Горячие', 'Теплые-Холодные', 'Горячие-Холодные'],
        datasets: [
            {
                label: 'горячие',
                data: [100, 150, 200],
                backgroundColor: '#D8443A',
                borderColor: '#D8443A',
                borderWidth: 1
            },
            {
                label: 'теплые',
                data: [300, 350, 400],
                backgroundColor: '#DF6D44',
                borderColor: '#DF6D44',
                borderWidth: 1
            },
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Закрытые заявки
const closedRequestsCtx = document.getElementById('closedRequestsChart').getContext('2d');
const closedRequestsChart = new Chart(closedRequestsCtx, {
    type: 'line',
    data: {
        labels: [1, 7, 14, 21, 30],
        datasets: [
            {
                label: 'всего',
                data: [1000, 1200, 1500, 800, 630],
                backgroundColor: '#383435',
                borderColor: '#383435',
                borderWidth: 2,
                tension: 0.1
            },
            {
                label: 'удачные',
                data: [800, 900, 1100, 400, 300],
                backgroundColor: '#F86161',
                borderColor: '#F86161',
                borderWidth: 2,
                tension: 0.1
            },
            {
                label: 'неудачные',
                data: [200, 300, 400, 330, 420],
                backgroundColor: '#7B0909',
                borderColor: '#7B0909',
                borderWidth: 2,
                tension: 0.1
            }
        ]
    },
    options: {
        responsive: true,
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

// Сворачивание/разворачивание боковой панели
const toggle_sidebar = document.getElementById('toggle-sidebar');
const toggle_sidebar_svg = document.getElementById('toggle-svg');

toggle_sidebar.addEventListener('click', function () {
    const sidebar = document.getElementById('sidebar');
    const content = document.getElementById('content');
    const logoText = document.getElementById('logo-text');
    const hide_block = document.getElementById('hide_block');
    const navTexts = document.querySelectorAll('.hide, #logo, #dashboard-text, #clients-text, #requests-text, #calendar-text, #settings-text');

    sidebar.classList.toggle('sidebar-collapsed');
    content.classList.toggle('content-expanded');

    if (sidebar.classList.contains('sidebar-collapsed')) {
        logoText.classList.add('hidden');
        hide_block.classList.remove('gap-y-5');
        hide_block.classList.remove('gap-x-3');
        hide_block.classList.remove('md:grid-cols-2');

        toggle_sidebar_svg.style.transform = 'scale(-1)';


        navTexts.forEach(text => text.classList.add('hidden'));
    } else {

        hide_block.classList.add('gap-y-5');
        hide_block.classList.add('gap-x-3');
        hide_block.classList.add('md:grid-cols-2');

        toggle_sidebar_svg.style.transform = 'scale(1)';

        logoText.classList.remove('hidden');
        navTexts.forEach(text => text.classList.remove('hidden'));
    }
});



const getChartOptions = () => {
    return {
        series: [52.8, 26.8, 20.4],
        colors: ["#1C64F2", "#16BDCA", "#9061F9"],
        chart: {
            height: 420,
            width: "100%",
            type: "pie",
        },
        stroke: {
            colors: ["white"],
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
        labels: ["Direct", "Organic search", "Referrals"],
        dataLabels: {
            enabled: true,
            style: {
                fontFamily: "Inter, sans-serif",
            },
        },
        legend: {
            position: "bottom",
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

