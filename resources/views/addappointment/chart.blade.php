@include('./header')
<!DOCTYPE html>

<html>
<head>
    <meta charset="UTF-8">
    <title>Chart</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<style>
    .container {
        display: flex;
        justify-content: left;
        align-items: left;
        height: 100%;
    }
    html,body{
background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0);
}

    .card {
        padding: 10px;
    }

    .chart-container {
        border: 1px solid #ddd;
        border-radius: 4px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0);
        margin: 10px;
        height: 90vh;
        width: 70vw;
        display: flex;
        justify-content: center;
        align-items: center;
        background-image: url('https://limcllc.com/wp-content/uploads/2017/03/Lafayette-Internal-Medicine-patient-portal.jpg');
background-size: cover;
background-repeat: no-repeat;
height: 100%;
font-family: 'Numans', sans-serif;
box-shadow: inset 0 0 0 2000px rgba(0, 0, 0, 0.4);
    }
</style>

<body>
<div class="container">
    <div class="card">
        <div class="chart-container">
            <canvas id="myChart"></canvas>
        </div>
    </div>
</div>
<script>
    var ctx = document.getElementById('myChart').getContext('2d');
    var data = {!! json_encode($data) !!};
    var diseases = data.map(function(d) { return d.disease });
    var counts = data.map(function(d) { return d.num_diseases });

    var chart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: diseases,
            datasets: [{
                label: 'DISEASES IN WAH CANTT',
                data: counts,
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(255, 206, 86, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(255, 206, 86, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            },
            barThickness: 30,
            maxBarThickness: 40
        }
    });
</script>
</body>
</html>
@include('./footer')