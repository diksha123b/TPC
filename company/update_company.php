<?php
$showAlert =false;
$showError = false;
session_start();

$email = $_SESSION['email'];




include "db.php";


$details = mysqli_fetch_assoc($con->query("select * from company where email ='$email'"));


$GLOBALS['company_name'] = $details['company_name'];
$GLOBALS['email'] = $details['email'];
$GLOBALS['password'] = $details['password'];
$GLOBALS['con_password'] = $details['con_password'];
$GLOBALS['job_sector'] = $details['job_sector'];
$GLOBALS['job_type'] = $details['job_type'];
$GLOBALS['min_q'] = $details['min_q'];
$GLOBALS['min_c'] = $details['min_c'];
$GLOBALS['ctc'] = $details['ctc'];
$GLOBALS['last'] = $details['last'];
$GLOBALS['mode'] = $details['mode'];
$GLOBALS['year'] = $details['year'];

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $company_name = $_POST["company_name"];
    $email =$_POST["email"];
    $password =  $_POST["password"];
    $con_password = $_POST["con_password"];
    $job_sector = $_POST["job_sector"];
    $min_q=$_POST["minimum_qualification"];
    $min_c=$_POST["Min_cpi"];
    $ctc=$_POST["CTC_offered"];
    $last=$_POST["ldat"];
    $mode=$_POST["mode"];
    $year=$_POST["year"];
}
    

$con->query("update company set company_name='$company_name', 
            email='$email', password='$password', con_password='$con_password', job_sector='$job_sector', 
            job_type='$job_type', min_q='$min_q', min_c='$min_c', ctc='$ctc', last='$last', 
            mode='$mode', year = $year where email ='$email';");

?>



<!DOCTYPE html>
<html>
<head>
    <title>Update</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" 
    integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" 
    crossorigin="anonymous">
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
            <form method="post" action="update_company.php">
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name of Company:</label>
		    <input type="text" class="form-control" name="company_name" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['company_name'] ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Email</label>
		    <input type="text" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['email']; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>
		  
		  <div class="form-group">
		    <label for="exampleInputEmail1">Password</label>
		    <input type="email" class="form-control" name="password" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['password']; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1">Confirm Password</label>
		    <input type="password" class="form-control" name="con_password" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['con_password']  ; ?>>
		  </div>
		  
		  
		  
		  <div class="form-group">
		    <label for="exampleInputPassword1">Job_Sector </label>
		    <input type="text" class="form-control" name="job_sector" id="exampleInputPassword1" value=<?php echo $GLOBALS['job_sector']; ?>>
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1"> Job Type</label>
		    <input type="text" class="form-control" name="job_type" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['job_type']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1">Minimum Qualification</label>
		    <input type="text" class="form-control" name="minimum_qualification" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['min_q']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1">Minimum CPI</label>
		    <input type="number" class="form-control" name="Min_cpi" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['min_c']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1">CTC Offered</label>
		    <input type="text" class="form-control" name="CTC_offered" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['ctc']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>
          <div class="form-group">
		    <label for="exampleInputEmail1">Last Date To Apply</label>
		    <input type="text" class="form-control" name="ldat" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['last']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1">Mode of Interview</label>
		    <input type="text" class="form-control" name="mode" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['mode']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

          <div class="form-group">
		    <label for="exampleInputEmail1">Year Since Recruiting From IIT Patna</label>
		    <input type="text" class="form-control" name="year" id="exampleInputEmail1" aria-describedby="emailHelp" value=<?php echo $GLOBALS['year']  ; ?>>
		    <!--<small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>-->
		  </div>

		  <button type="submit" class="btn btn-primary" name="update1">Update</button>
          <button type="submit" class="btn btn-white" name="back1"><a href="recruithome.php">Go Back</a></button>
		</form>
            </div>
     </div>
     </div>
    </div>
    </div>
    
</body>
</html>