<?php
$servername = "localhost";
$username = "root";        
$password = "";
$dbname = "miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title>IIT-Patna</title>
    </head>
    
    
<lang="en">    
    <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>TRAINING AND PLACEMENT CELL-IIT PATNA</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script src="http://code.jquery.com/ui/1.11.1/jquery-ui.min.js"></script>
        <link rel="stylesheet" href="https://code.jquery.com/ui/1.11.1/themes/smoothness/jquery-ui.css" />
        <script src="/TrainingPlacement/js/validateRegister.js"  type="text/javascript"></script>
        <style>
            .span_er
            {
                    font:normal 11px Verdana, Arial, Helvetica, sans-serif;
                    color:blue;
                    border-bottom-style: groove;border-width: 1px;
            }
        </style>
    </head>
    <body>
       
    
    <div class="container">    
        
        <div id="signupbox" style=" margin-top:50px;" class="mainbox col-md-12">
                    <div class="panel panel-info">
                        <div class="panel-heading">
                            <div class="panel-title text-center">Recruiter registration for TPC - IIT PATNA</div>
                        </div>  
                        <div class="panel-body" >
                        
                        <!-- <form action= method="POST"> -->

                            <form action="process_form.php" method="POST" class="form-horizontal">
                                  
                                <div class="form-group">
                                    <label for="companyname" class="col-md-3 control-label">Name of Company:</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="companyname" id="companyname" value="" >
                                        <br><span id="companyname_span" class="span_er"></span>
                                    </div>
                                </div>
                                    
                                
       
                                    <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Email:</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="g_email" id="email" value="" >
                                        <br><span id="email_span" class="span_er"></span>
                                    </div>
        </div>
                                    <div class="form-group">
                                    <label for="email" class="col-md-3 control-label">Password:</label>
                                    <div class="col-md-5">
                                        <input type="password" class="form-control" name="password" id="password" value="" >
                                        <br><span id="email_span" class="span_er"></span>
                                    </div>
                                </div>

                                
                                <div class="form-group">
                                    <label for="cpass" class="col-md-3 control-label">Confirm Password:</label>
                                    <div class="col-md-5">
                                        <input type="password" class="form-control" name="cpass" id="cpass" >
                                        <br><span id="cpass_span" class="span_er"></span>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="job_sector" class="col-md-3 control-label">Job-Sector:</label>
                                    <div class="col-md-5">
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
                                    <label for="cpass" class="col-md-3 control-label">Job Type:</label>
                                    <div class="col-md-5">
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
                                    <label for="cpass" class="col-md-3 control-label">Minimum Qualification:</label>
                                    <div class="col-md-5">
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
                                    <label for="cpass" class="col-md-3 control-label">Minimum CPI:</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="mincpi" id="ctc_o" >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
        </div>
                                <div class="form-group">
                                    <label for="cpass" class="col-md-3 control-label">CTC Offered:</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="ctc_o" id="ctc_o" >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
        </div>
        <div class="form-group">
                                    <label for="cpass" class="col-md-3 control-label">Last Date to Apply:</label>
                                    <div class="col-md-5">
                                        <input type="date" class="form-control" name="ldta" id="ldta" >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
        </div>
        <div class="form-group">
                                    <label for="cpass" class="col-md-3 control-label">Mode:</label>
                                    <div class="col-md-5">
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
                                    <label for="cpass" class="col-md-3 control-label">Year Since Recruiting From IIT Patna:</label>
                                    <div class="col-md-5">
                                        <input type="text" class="form-control" name="ysr" id="ysr" >
                                        <br><span id="ctc_span" class="span_er"></span>
                                    </div>
        </div>    
                                <div class="form-group">
                                    <!-- Button -->                                        
                                    <div class="col-md-offset-5 col-md-5">
                                    <input type="submit" value="Submit" name = "submit">
                                    </div>
                                </div>                                
                                
                            </form>
                         </div>
                    </div>
          
         </div> 
    </div>
    
    </body>
</html>
