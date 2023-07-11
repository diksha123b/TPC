<!DOCTYPE html>
<html>
<head>
	<title>Filter Companies by Year</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Filter Companies by Year</h2>
		<form method="POST">
			<div class="form-group">
				<label for="year">Select Year:</label>
				<select class="form-control" id="year" name="year" onchange="this.form.submit()">
					<option value="">--Select Year--</option>
					<option value="2023">2023</option>
					<option value="2022">2022</option>
					<option value="2021">2021</option>
                    <option value="2020">2020</option>
                    <option value="2019">2019</option>
				</select>
			</div>
		</form>

		<?php
		// check if year is selected
		if (isset($_POST['year'])) {
			$year = $_POST['year'];

			// connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "miniproject";
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// retrieve unique company names for the selected year
			$sql = "SELECT DISTINCT Company_name FROM student_data WHERE year = $year";
			$result = mysqli_query($conn, $sql);

			// display dropdown list of company names
			if (mysqli_num_rows($result) > 0) {
				echo '<form method="POST">';
				echo '<div class="form-group">';
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row['Company_name'] . '">' . $row['Company_name'] . '</option>';
				}
				echo '</select>';
				echo '</div>';
				echo '<a href="stathome.php"><button type="submit" class="btn btn-dark">Go Back</button></a>';

				echo '</form>';
			} else {
				echo '<p>No companies found for the selected year.</p>';
			}

			// close database connection
			mysqli_close($conn);
		}
		?>
	</div>
</body>
</html>

