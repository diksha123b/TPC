<?php
// connect to database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";
$conn = mysqli_connect($servername, $username, $password, $dbname);

// retrieve data from the database
$sql = "SELECT Company_name, COUNT(*) as num_students FROM student_data GROUP BY Company_name";
$result = mysqli_query($conn, $sql);

// create data array for chart
$data = array();
$data[] = array('Company', 'Number of Students');
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = array($row['Company_name'], (int)$row['num_students']);
}

// convert data array to JSON format
$json_data = json_encode($data);

// close database connection
mysqli_close($conn);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Number of Students Enrolled in Each Company</title>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);

        function drawChart() {
            var data = google.visualization.arrayToDataTable(<?php echo $json_data; ?>);

            var options = {
                title: 'Number of Students Enrolled in Each Company',
                legend: {position: 'none'}
            };

            var chart = new google.visualization.ColumnChart(document.getElementById('chart_div'));
            chart.draw(data, options);
        }
    </script>
</head>
<body>
    <div id="chart_div" style="width: 100%; height: 500px;"></div>
</body>
</html>
