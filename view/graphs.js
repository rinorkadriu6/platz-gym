const barChartData = {
    labels: ['January', 'February', 'March', 'April', 'May'],
    datasets: [
        {
            label: 'January Sales',
            data: [50, 75, 120, 100, 90],
            backgroundColor: 'rgba(75, 192, 192, 0.2)',
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        },
        {
            label: 'December Sales',
            data: [25, 50, 100, 80, 60],
            backgroundColor: 'rgba(184, 192, 75, 0.2)',
            borderColor: 'rgba(184, 192, 75, 1)',
            borderWidth: 1
        },
    ]
};

const lineChartData = {
    labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
    datasets: [{
        label: 'Weekly Progress',
        data: [10, 20, 15, 30],
        borderColor: 'rgba(255, 99, 132, 1)',
        borderWidth: 2,
        fill: false
    }]
};

new Chart(document.getElementById('barChart').getContext('2d'), {
    type: 'bar',
    data: barChartData
});

new Chart(document.getElementById('lineChart').getContext('2d'), {
    type: 'line',
    data: lineChartData
});
