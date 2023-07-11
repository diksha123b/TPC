<?php
include 'connection.php';
session_start();
$GLOBALS['id'] = $_GET['id'];
$id = $GLOBALS['id'];

$query = "SELECT * FROM company WHERE id='$id'";
$result = mysqli_query($con, $query);
$row = mysqli_fetch_assoc($result);

$GLOBALS['company_name'] = $row['company_name'];
$GLOBALS['email'] = $row['email'];
$GLOBALS['job_sector'] = $row['job_sector'];
$GLOBALS['job_type'] = $row['job_type'];
$GLOBALS['min_q'] = $row['min_q'];
$GLOBALS['min_c'] = $row['min_c'];
$GLOBALS['ctc'] = $row['ctc'];
$GLOBALS['mode'] = $row['mode'];
$GLOBALS['last'] = $row['last'];
$GLOBALS['year'] = $row['year'];

?>
<?php

if ($_SERVER["REQUEST_METHOD"]=="POST") {
    include 'connection.php';
    $company_name = $_POST['company_name'];
    $email = $_POST['email'];
    $job_sector = $_POST['job_sector'];
    $job_type = $_POST['job_type'];
    $min_q = $_POST['min_q'];
    $min_c = $_POST['min_c'];
    $ctc = $_POST['ctc'];
    $last = $_POST['last'];
    $mode = $_POST['mode'];
    $year = $_POST['year'];

    $con->query ("UPDATE company SET company_name='$company_name', email='$email',  job_sector='$job_sector', job_type='$job_type', min_q='$min_q', min_c='$min_c', ctc='$ctc', last='$last', mode='$mode', year='$year' WHERE id='$id'");
    header("location: company.php");
       
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>company_update</title>
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
						<form action="update.php" method="post">
                        <div class="form-group ">
                                    <label for="companyname" class="col-md-3 control-label">Name of Company:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="companyname" id="companyname" value="<?php echo $GLOBALS['company_name']?>" readonly>
                                        <br><span id="companyname_span" class="span_er"></span>
                                    </div>
                                </div>
                                    <div class="form-group col-md-12">
                                    <label for="email" class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="g_email" id="email" value="<?php echo $GLOBALS['email']?>" >
                                        <br><span id="email_span" class="span_er"></span>
                                    </div>
                                    </div>
                                
    
                                <div class="form-group">
                                    <label for="job_sector" class="col-md-3 control-label">Job-Sector:</label>
                                    <div class="col-md-12">
                                    <div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="it" value="IT">
									<label class="form-check-label" for="it">IT</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="finance" value="Finance">
									<label class="form-check-label" for="finance">Finance</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="consulting" value="Consulting">
									<label class="form-check-label" for="consulting">Consulting</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="ecommerce" value="ECommerce">
									<label class="form-check-label" for="ecommerce">E-Commerce</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="teaching" value="Teaching">
									<label class="form-check-label" for="teaching">Teaching</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="other" value="Other">
									<label class="form-check-label" for="other">Other</label>
								</div>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="cpass" class="col-md-12 control-label">Job Type:</label>
                                    <div class="col-md-12">
                                    <div class="form-check">
									<input class="form-check-input" type="radio" name="ftj" id="jt" value="int" required>
                                    <label for="jt">Internship</label>  
                            </div>
                            <div>
                                <div class="form-check">
								<input class="form-check-input" type="radio" name="ftj" id="jt" value="full" required>
                                <label for="jt">Full-time job</label>
                            </div>
                            </div>
                                    </div>
                                </div>                                
                                <div class="form-group">
                                    <label for="cpass" class="col-md-12 control-label">Minimum Qualification:</label>
                                    <div class="col-md-12">
                                    <div class="form-check">
									<input class="form-check-input" type="radio" name="minq" id="BTech" value="BTech" required>
                                    <label for="internship">BTech</label>    
                            </div>
                               <div>
                                    <input type="radio" id="minQualification" name="minq" value="MTech" required>
                                    <label for="MTech">MTech</label>
                                <div>
                            </div>
                               <div>
                                   <input type="radio" id="minQualification" name="minq" value="MSc" required>
                                   <label for="MSc">MSc</label>
                               <div>
                            </div>
                                <div>
                                   <input type="radio" id="minQualification" name="minq" value="PhD" required>
                                   <label for="PhD">PhD</label>
                               
                            </div>
                            
                                    </div>
                                </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="cpass" class="col-md-12 control-label">Minimum CPI:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="mincpi" id="ctc_o" value="<?php echo $GLOBALS['min_c']?>"  >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
                                 </div>

                                <div class="form-group">
                                    <label for="cpass" class="col-md-12 control-label">CTC Offered:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="ctc_o" id="ctc_o" value="<?php echo $GLOBALS['ctc']?>" >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
                                   </div>
                                   <div class="form-group">
                                    <label for="cpass" class="col-md-12 control-label">Last Date to Apply:</label>
                                    <div class="col-md-12">
                                        <input type="date" class="form-control" name="ldta" id="ldta" value="<?php echo $GLOBALS['last']?>"  >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
                                    </div>
                                    <div class="form-group">
                                    <label for="cpass" class="col-md-3 control-label">Mode:</label>
                                    <div class="col-md-12">
                                    <div class="form-check">
									<input class="form-check-input" type="radio" name="oc" id="moi" value="BTech" required>
                                    <label for="moi">On-campus</label>    
                                    </div>
                                    <div>
                                    <div class="form-check">
									<input class="form-check-input" type="radio" name="oc" id="moi" value="Virtual" required>
                                    <label for="moi">Virtual</label>
                            
                                   </div>
                                </div>
                                    </div>
                                 </div>

        
                                    <div class="form-group">
                                    <label for="cpass" class="col-md-12 control-label">Year Since Recruiting From IIT Patna:</label>
                                    <div class="col-md-12">
                                        <input type="text" class="form-control" name="ysr" id="ysr" value="<?php echo $GLOBALS['year']?>" >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
        </div>
                            <input type="submit" class="btn btn-dark btn-lg"
                            name="update"></button>
                            
                            

                           



                           