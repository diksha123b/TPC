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

// Query the database to get the number of students placed in each year
$sql = "SELECT yog, COUNT(*) AS count FROM studinfo WHERE placed = 'Yes' GROUP BY yog";
$result = mysqli_query($conn, $sql);

// Create arrays to store the year names and count of students placed in each year
$labels = array();
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['yog'];
    $data[] = $row['count'];
}

// Close the database connection
mysqli_close($conn);

// Generate the pie chart using Chart.js library
?>
<!DOCTYPE html>
<html>
<head>
    <title>Year-wise stats</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
</head>
<body>
<h1>Yearwise students placed</h1>
    <div style="width: 35%;">
        <canvas id="pie-chart"></canvas>
    <div style="width: 35%;">
        <canvas id="pie-chart"></canvas>
    </div>

    <script>
        var data = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Year-wise stats',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: ['#131E3A','#EFEFEF', '#36A2EB', '#FFCE56']
            }]
        };

        var options = {
            responsive: true
        };

        var pieChart = new Chart(document.getElementById('pie-chart'), {
            type: 'pie',
            data: data,
            options: options
        });
    </script>
</body>
</html>
