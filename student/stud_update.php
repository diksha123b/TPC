<?php
$showAlert = false;
$showError = false;
session_start();

$email = $_SESSION['email'];

include "proce_stud_login.php";


$details = mysqli_fetch_assoc($conn->query("select * from studinfo where email ='$email'"));


$GLOBALS['stud_name'] = $details['stud_name'];
$GLOBALS['roll'] = $details['roll'];
$GLOBALS['email'] = $details['email'];
$GLOBALS['password'] = $details['password'];
$GLOBALS['confirm_password'] = $details['confirm_password'];
$GLOBALS['contact'] = $details['contact'];
$GLOBALS['ten_percent'] = $details['ten_percent'];
$GLOBALS['twe_percent'] = $details['twe_percent'];
$GLOBALS['c_cpi'] = $details['c_cpi'];
$GLOBALS['c_enrolled'] = $details['c_enrolled'];
$GLOBALS['branch'] = $details['branch'];
$GLOBALS['yog'] = $details['yog'];
$GLOBALS['job_sector'] = $details['job_sector'];
$GLOBALS['AUCP'] = $details['placed'];
$GLOBALS['iyn'] = $details['iyn'];
?>
<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$stud_name = $_POST["stud_name"];
	$roll = $_POST["roll"];
	$email = $_POST["email"];
	$password = $_POST["password"];
	$confirm_password = $_POST["confirm_password"];
	$contact = $_POST["contact"];
	$ten_percent = $_POST["ten_percent"];
	$twe_percent = $_POST["twe_percent"];
	$c_cpi = $_POST["c_cpi"];
	$c_enrolled = $_POST["c_enrolled"];
	$branch = $_POST["branch"];
	$yog = $_POST["yog"];
	$job_sector = $_POST["job_sector"];
	$AUCP = $_POST["placed"];
	$iyn = $_POST["iyn"];
}


$conn->query("update studinfo set stud_name='$stud_name', roll='$roll', 
            email='$email', password='$password', confirm_password='$confirm_password', contact='$contact', 
            ten_percent='$ten_percent', twe_percent='$twe_percent', c_cpi='$c_cpi', c_enrolled='$c_enrolled', branch='$branch', 
            yog='$yog', job_sector = '$job_sector', placed = '$AUCP' , iyn = '$iyn' where email ='$email';");




?>


<!DOCTYPE html>
<html>

<head>
	<title>Update</title>
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css"
		integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>

<body>
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-12 mt-5">
				<div class="col-md-5 mt-5 mx-auto">
					<div class="card">
						<div class="card-header">
							<h1>Update Information</h1>
						</div>
						<div class="card-body">
							<form method="post" action="stud_update.php">
								<div class="form-group">
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
									<label for="password"> Password</label>
									<input type="password" class="form-control" name="password" id="password"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['password']; ?>>
								</div>

								<div class="form-group">
									<label for="confirm_password">New Password</label>
									<input type="password" class="form-control" name="confirm_password"
										id="confirm_password" aria-describedby="emailHelp" value=<?php echo $GLOBALS['confirm_password']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>


								<div class="form-group">
									<label for="contact">Contact </label>
									<input type="number" class="form-control" name="contact" id="contact"
										value=<?php echo $GLOBALS['contact']; ?>>
								</div>

								<div class="form-group">
									<label for="ten_percent"> Class 10 percentage</label>
									<input type="number" class="form-control" name="ten_percent" id="ten_percent"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['ten_percent']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								<div class="form-group">
									<label for="twe_percent">Class 12 percentage</label>
									<input type="number" class="form-control" name="twe_percent" id="twe_percent"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['twe_percent']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								<div class="form-group">
									<label for="c_cpi">Current CPI</label>
									<input type="number" class="form-control" name="c_cpi" id="c_cpi"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['c_cpi']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								<div class="form-group">
									<label for="c_enrolled">Course Enrolled</label>
									<input type="text" class="form-control" name="c_enrolled" id="c_enrolled"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['c_enrolled']; ?>>
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
									<label for="placed">Are you Currently placed</label>

									<input type="text" class="form-control" name="placed" id="placed"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['AUCP']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>





								<div class="form-group">
									<label for="iyn">CTC(If Placed)</label>
									<input type="text" class="form-control" name="iyn" id="iyn"
										aria-describedby="emailHelp" value=<?php echo $GLOBALS['iyn']; ?>>
									<!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
								</div>

								<button type="submit" class="btn btn-white" name="update1">Update</button>
								
								<button type="submit" class="btn btn-white" name="back1" ><a href = studhome.php> GoBack</button></a>
					</div>
				</div>
			</div>
		</div>

</body>

</html>