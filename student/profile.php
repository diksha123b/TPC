<?php
session_start();

$email = $_SESSION['email'];
include "proce_stud_login.php";
if(!isset($_SESSION['email'])){
        header('Location: studloginn.php');
        exit();
    }






$details = mysqli_fetch_assoc($conn->query("select * from studinfo where email ='$email'"));


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
        <title>Profile Details</title>
</head>

<style>
        p.heading {
                margin-top: 20px;
        }

        p.top {
                margin-top: 20px;
                margin-bottom: 20px;
                font-size: 25px;
        }

        h1 {
                font-size: 40px;
        }

        label {
                font-size: 17px;
        }

        input {
                font-size: 17px;
        }

        a {
                font-size: 25px;
        }

        tr {
                font-size: 23px;
        }
</style>
<body>



    <title>View Profile</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <div class="container-fluid">
    <div class="row">
     <div class="col-md-12 mt-5">
     <div class="col-md-5 mt-5 mx-auto">
        <div class="card">
            <div class="card-header">
             <h1>Your Profile</h1>
            </div>
            <div class="card-body">
                   
		  <div class="form-group">
		    <label for="exampleInputEmail1">Name: </label>
            <label for="exampleInputEmail1"><?php echo $stud_name ?></label>
		  </div>
		  
		  <div class="form-group">
          <label for="exampleInputEmail1">RollNo:</label>
            <label for="exampleInputEmail1"> <?php echo $rollno; ?></label>
		  </div>
		  
		  <div class="form-group">
          <label for="exampleInputEmail1">Email:</label>
            <label for="exampleInputEmail1"><?php echo $email; ?></label>
		  </div>

                  

                  <div class="form-group">
                <label for="exampleInputEmail1">Contact:</label>
                <label for="exampleInputEmail1"><?php echo $contact; ?></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">Class 10 percentage:</label>
                <label for="exampleInputEmail1"><?php echo $ten_percent; ?></label>

		  </div>  

                  <div class="form-group">
                <label for="exampleInputEmail1">Class 12 percentage:</label>
                <label for="exampleInputEmail1"><?php echo $twe_percent; ?></label>
		  </div>  

                  <div class="form-group">
                <label for="exampleInputEmail1">Current CPI:</label>
                <label for="exampleInputEmail1"><?php echo $c_cpi; ?></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">Course Enrolled:</label>
                <label for="exampleInputEmail1"><?php echo $c_enrolled; ?></label>
		  </div>
                  <div class="form-group">
                <label for="exampleInputEmail1">Branch:</label>
                <label for="exampleInputEmail1"><?php echo $branch; ?></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">Year of Graduation:</label>
                <label for="exampleInputEmail1"><?php echo $yoga; ?></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">Area of Interest:</label>
                <label for="exampleInputEmail1"><?php echo $job_sector1; ?></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">Are you Currently Placed:</label>
                <label for="exampleInputEmail1"><?php echo $AUCP; ?></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">CTC(If Placed):</label>
                <label for="exampleInputEmail1"><?php echo $iy; ?></label>
		  </div>
                    
		  
		  <button type="submit" class="btn btn-white"><a href = studhome.php> GoBack</button></a>
		  
		</form>
            </div>
     </div>
     </div>



        </table>

        

</html>