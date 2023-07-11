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

// Query the database to get the number of students placed in each branch
$sql = "SELECT branch, COUNT(*) AS count FROM studinfo WHERE placed = 'Yes' GROUP BY branch";
$result = mysqli_query($conn, $sql);

// Create arrays to store the branch names and count of students placed in each branch
$labels = array();
$data = array();
while ($row = mysqli_fetch_assoc($result)) {
    $labels[] = $row['branch'];
    $data[] = $row['count'];
}

// Close the database connection
mysqli_close($conn);

// Generate the bar graph using Chart.js library
?>
<!DOCTYPE html>
<html>
<head>
    <title>Branch-wise students placed</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.5.0/chart.min.js"></script>
</head>
<body>
<h1>Branchwise students placed</h1>
   
    <div style="width: 50%;">
        <canvas id="bar-chart"></canvas>
    </div>

    <script>
        var data = {
            labels: <?php echo json_encode($labels); ?>,
            datasets: [{
                label: 'Branch-wise students placed',
                data: <?php echo json_encode($data); ?>,
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40']
            }]
        };

        var options = {
            scales: {
                y: {
                    beginAtZero: true
                }
            },
            responsive: true
        };

        var barChart = new Chart(document.getElementById('bar-chart'), {
            type: 'bar',
            data: data,
            options: options
        });
    </script>
</body>
</html>
