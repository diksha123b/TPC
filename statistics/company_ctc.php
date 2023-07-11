<!DOCTYPE html>
<html>
<head>
	<title>Company vs CTC Graph</title>
	<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
	<div style="width: 50%">
		<canvas id="myChart"></canvas>
	</div>
	<?php
		// Assuming the data is stored in a database table called "company"
		$servername = "localhost";
		$username = "root";
		$password = "";
		$dbname = "miniproject";

		// Create connection
		$conn = new mysqli($servername, $username, $password, $dbname);

		// Check connection
		if ($conn->connect_error) {
		    die("Connection failed: " . $conn->connect_error);
		}

		$sql = "SELECT company_name, AVG(ctc) AS avg_ctc FROM company where job_type='full' OR job_type='job' GROUP BY company_name ORDER BY AVG(ctc) DESC";
		$result = $conn->query($sql);
		$companies = array();
		$avg_ctc = array();

		if ($result->num_rows > 0) {
		    // output data of each row
		    while($row = $result->fetch_assoc()) {
		        $companies[] = $row["company_name"];
		        $avg_ctc[] = $row["avg_ctc"];
		    }
		} else {
		    echo "0 results";
		}

		$conn->close();

	?>

	<script>
		var companies = <?php echo json_encode($companies); ?>;
		var avgCtc = <?php echo json_encode($avg_ctc); ?>;

		var ctx = document.getElementById('myChart').getContext('2d');
		var myChart = new Chart(ctx, {
		    type: 'bar',
		    data: {
		        labels: companies,
		        datasets: [{
		            label: 'Average CTC',
		            data: avgCtc,
		            backgroundColor: 'rgba(54, 162, 235, 0.2)',
		            borderColor: 'rgba(54, 162, 235, 1)',
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
		        }
		    }
		});
	</script>
</body>
</html>



