<?php

// Connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Query the database to get the number of students placed in each job sector
$sql = "SELECT c.job_sector AS sector, COUNT(*) AS count FROM studinfo s INNER JOIN company c ON s.job_sector = c.job_sector WHERE placed = 'Yes' GROUP BY c.job_sector";
$result = mysqli_query($conn, $sql);

// Create arrays to store the job sectors and count of students placed in each sector
$labels = array();
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['sector'];
    $data[] = $row['count'];
}

// Close the database connection
mysqli_close($conn);

// Generate the line graph using Chart.js library
?>
<!DOCTYPE html>
<html>
<head>
    <title>Job sector-wise stats</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
</head>
<body>
<h1>Sectorwise students placed:</h1>
    <div style="width: 50%;">
        <canvas id="line-chart"></canvas>
    </div>

    <script>
        var data = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Job sector-wise stats',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: 'rgba(255, 99, 132, 0.2)',
                borderColor: 'rgba(255, 99, 132, 1)',
                borderWidth: 1,
                pointBackgroundColor: 'rgba(255, 99, 132, 1)'
            }]
        };

        var options = {
            responsive: true,
            maintainAspectRatio: false,
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true
                    }
                }]
            }
        };
        var lineChart = new Chart(document.getElementById('line-chart'), {
            type: 'line',
            data: data,
            options: options
        });
    </script>
</body>
</html>
