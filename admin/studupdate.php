<?php
include 'connection.php';
session_start();
$GLOBALS['roll'] = $_GET['roll'];
$roll = $GLOBALS['roll'];

$query = "SELECT * FROM studinfo WHERE roll='$roll'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$GLOBALS['stud_name'] = $row['stud_name'];
$GLOBALS['roll'] = $row['roll'];
$GLOBALS['email'] = $row['email'];
$GLOBALS['contact'] = $row['contact'];
$GLOBALS['c_cpi'] = $row['c_cpi'];
$GLOBALS['branch'] = $row['branch'];
$GLOBALS['job_sector'] = $row['job_sector'];
$GLOBALS['yog'] = $row['yog'];
$GLOBALS['iyn'] = $row['iyn'];

?>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include 'connection.php';
    $stud_name = $_POST['stud_name'];
    $roll = $_POST['roll'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $c_cpi = $_POST['c_cpi'];
    $branch = $_POST['branch'];
    $job_sector = $_POST['job_sector'];
    $yog = $_POST['yog'];
    $iyn = $_POST['iyn'];

    $con->query ("UPDATE studinfo SET stud_name='$stud_name', roll='$roll',  email='$email', contact='$contact', c_cpi='$c_cpi', branch='$branch', job_sector='$job_sector', yog='$yog', iyn='$iyn' WHERE roll='$roll'");
    header("location: student.php");
       
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>student_update</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			background-color: #f2f2f2;
		}
		.form-control:focus {
			border-color: #000080;
			box-shadow: none;
		}
        input[type="submit"] {
  background-color: #008CBA; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 24px; /* Some padding */
  text-align: left; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Make it an inline element */
  font-size: 16px; /* Increase font size */
  margin: 4px 2px; /* Add some margin */
  cursor: pointer; /* Add cursor on hover */
  border-radius: 4px; /* Add border radius */
}

input[type="submit"]:hover {
  background-color: #000080; /* Dark green background on hover */
}
	</style>
    
</head>
<body>
	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-info text-white custom-bg">Update Details</div>

					<div class="card-body">
						<form action="studupdate.php" method="post">
                        <div class="form-group ">
                        <label for="stud_name">Name:</label>
									<input type="text" class="form-control" name="stud_name" id="stud_name"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['stud_name']; ?>>
								
								</div>

								<div class="form-group">
									<label for="roll">Roll No</label>
									<input type="text" class="form-control" name="roll" id="roll"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['roll']; ?>>
									
								</div>

								<div class="form-group">
									<label for="email">Email</label>
									<input type="email" class="form-control" name="email" id="email"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['email']; ?>>
									
								</div>
								<div class="form-group">
									<label for="contact">Contact </label>
									<input type="number" class="form-control" name="contact" id="contact"
										value=<?php echo $GLOBALS['contact']; ?>>
								</div>
								<div class="form-group">
									<label for="c_cpi">Current CPI</label>
									<input type="number" class="form-control" name="c_cpi" id="c_cpi"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['c_cpi']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>
								<div class="form-group">
									<label for="branch">Branch</label>
									<input type="text" class="form-control" name="branch" id="branch"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['branch']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								<div class="form-group">
									<label for="yog">Year of Graduation</label>
									<input type="number" class="form-control" name="yog" id="yog"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['yog']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								<div class="form-group">
									<label for="job_sector">Area of Interest</label>
									<input type="text" class="form-control" name="job_sector" id="job_sector"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['job_sector']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								
								<div class="form-group">
									<label for="iyn">CTC(If Placed)</label>
									<input type="text" class="form-control" name="iyn" id="iyn"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['iyn']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

                            <input type="submit" class="btn btn-dark btn-lg"
                            name="update"></button>
                            
                            

                           



                           