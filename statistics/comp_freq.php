<!DOCTYPE html>
<html>
<head>
	<title>View Company frequency</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
	<style type="text/css">
		.container {
			margin-top: 50px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h2>Company Frequency</h2>
		<form method="POST">
			<div class="form-group">
				<label for="company">Select Company:</label>
				<select class="form-control" id="company" name="company" onchange="this.form.submit()">
                <option value="">--Select company--</option>
                <option value="Google">Google</option>
                <option value="Adobe">Adobe</option>
                <option value="Atlassian">Atlassian</option>
                <option value="Apple">Apple</option>
                <option value="Microsoft">Microsoft</option>
                <option value="DE Shaw">DE Shaw</option>
                <option value="Morgan Stanley">Morgan Stanley</option>
                <option value="Open AI">Open AI</option>
                <option value="CodeNation">CodeNation</option>
                <option value="Flipkart">Flipkart</option>
                <option value="Mercedes">Mercedes</option>
                <option value="Boston Consulting group">Boston Consulting group</option>
                <option value="Mckinsey">Mckinsey</option>
                <option value="Axis Bank">Axis Bank</option>
                <option value="Infosys">Infosys</option>
                <option value="HDFC Bank">HDFC Bank</option>
				</select>
			</div>
		</form>

		<?php
		// check if company is selected
		if (isset($_POST['company'])) {
			$company = $_POST['company'];

			// connect to database
			$servername = "localhost";
			$username = "root";
			$password = "";
			$dbname = "miniproject";
			$conn = mysqli_connect($servername, $username, $password, $dbname);

			// retrieve unique years for the selected company
			$sql = "SELECT DISTINCT year FROM student_data WHERE Company_name = '$company'";
			$result = mysqli_query($conn, $sql);

			// display dropdown list of years
			if (mysqli_num_rows($result) > 0) {
				echo '<form method="POST">';
				echo '<div class="form-group">';
				while ($row = mysqli_fetch_assoc($result)) {
					echo '<option value="' . $row['year'] . '">' . $row['year'] . '</option>';
				}
				echo '</select>';
				echo '</div>';
				echo '<a href="stathome.php"><button type="button" class="btn btn-dark">Go Back</button></a>';

				echo '</form>';
			} else {
				echo '<p>Null set</p>';
			}

			// close database connection
			mysqli_close($conn);
		}
		?>
	</div>
</body>
</html>


