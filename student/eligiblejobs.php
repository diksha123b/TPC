<?php
session_start();
require_once('db.php');
$email =$_SESSION['email'];
// echo $email;

$details = mysqli_fetch_assoc($con->query("select * from studinfo where email ='$email'"));


$GLOBALS['roll'] = $details['roll'];
$roll = $GLOBALS['roll'];

// echo $roll;

// $roll = "select roll from studinfo where email = '$_SESSION['email']'";

$details = mysqli_fetch_assoc($con->query("select * from studinfo where email ='$email'"));


$GLOBALS['stud_name'] = $details['stud_name'];
$GLOBALS['rollno'] = $details['roll'];
$GLOBALS['g_email'] = $details['email'];
$GLOBALS['g_password'] = $details['password'];
$GLOBALS['confirm_password'] = $details['confirm_password'];
$GLOBALS['contact'] = $details['contact'];
$GLOBALS['ten_percent'] = $details['ten_percent'];
$GLOBALS['twe_percent'] = $details['twe_percent'];
$GLOBALS['c_cpi'] = $details['c_cpi'];
$GLOBALS['c_enrolled'] = $details['c_enrolled'];
$GLOBALS['branch'] = $details['branch'];
$GLOBALS['yoga'] = $details['yog'];
$GLOBALS['job_sector1'] = $details['job_sector'];
$GLOBALS['AUCP'] = $details['placed'];
$GLOBALS['iy'] = $details['iyn'];


?>
<!DOCTYPE html>
<html>
<head>
	<title><i>Eligible Jobs</i></title>
	<!-- Bootstrap CDN stylesheet link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		h1 {
			text-align: center;
			margin-bottom: 15px;
			color: #080808; /* added white text color */
		}
		body {
			background-color: #f8f9fa; /* added light gray background color */
		}
		thead th {
			background-color: #131E3A; /* added blue background color to table headers */
			color: #fff; /* added white text color to table headers */
		}
		.table-hover tbody tr:hover {
			background-color: #f2f2f2; /* added light gray background color to table rows on hover */
		}
	</style>
</head>
<body>
	<div class="container">
	<button style="position: fixed; top: 10px; left: 65px; background-color:white; color: dark; margin-top: 10px; margin-left: 10px;" onclick="window.history.back();">Go Back</button>
		<h1><i>Eligible Jobs</i></h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th>Company Name</th>
					<!-- <th>Job Sector</th> -->
                    <th>Job Type</th>
					<th>CTC Offered</th>
					<th>Min Qualification</th>
                    <th>Min_cpi</th>
				</tr>
                
			</thead>
			<tbody>
            <tr>
                <?php
                // $query=  "SELECT DISTINCT company_name, job_sector, job_type, ctc_offered, minimum_qualification,Min_cpi 
                // FROM recruitment_form 
                // WHERE job_sector IN (SELECT job_sector FROM studinfo WHERE roll ='$roll')
                // AND minimum_qualification = (SELECT c_enrolled FROM studinfo WHERE roll = '$roll')
                // AND Min_cpi >= (SELECT Min_cpi FROM recruitment_form WHERE company_name IN 
                //             (SELECT company_name FROM recruitment_form WHERE job_sector IN 
                //              (SELECT job_sector FROM studinfo WHERE roll ='$roll')))
                //              ORDER BY company_name";
                $GLOBALS['c_cpi'] = $details['c_cpi'];
                $GLOBALS['c_enrolled'] = $details['c_enrolled'];
				
                
                $query2 = "select distinct(company_name),job_type,ctc,min_q,min_c from company rf join studinfo s where rf.min_q= '$c_enrolled' and rf.min_c <= '$c_cpi' ";
                
                $result=mysqli_query($con,$query2);
                  while($row=mysqli_fetch_assoc($result))
                  {
                ?>
                <td><?php echo $row['company_name']; ?> </td>
                <td><?php echo $row['job_type']; ?> </td>
                <td><?php echo $row['ctc']; ?> </td>
                <td><?php echo $row['min_q'] ?> </td>; 
                <td><?php echo $row['min_c'];?> </td>
                


                </tr>
                <?php
                   
                    }
                ?>    
                   
				
				<!-- add more rows as needed -->
			</tbody>
		</table>
	</div>
	<!-- Bootstrap CDN scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous



