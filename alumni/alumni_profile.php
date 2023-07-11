<?php
session_start();

$email = $_SESSION['email'];
if(!isset($_SESSION['email'])){
        header('Location: alumnilogin.php');
        exit();
    }



include "proce_alumni_login.php";



$details = mysqli_fetch_assoc($conn->query("select * from alumni where email ='$email'"));


$GLOBALS['al_name'] = $details['al_name'];
// $GLOBALS['rollno'] = $details['roll'];
$GLOBALS['al_email'] = $details['email'];
$GLOBALS['al_password'] = $details['password'];
// $GLOBALS['confirm_password'] = $details['confirm_password'];
$GLOBALS['al_contact'] = $details['contact'];
// $GLOBALS['ten_percent'] = $details['ten_percent'];
// $GLOBALS['twe_percent'] = $details['twe_percent'];
$GLOBALS['al_cpi'] = $details['cpi'];
// $GLOBALS['c_enrolled'] = $details['c_enrolled'];
// $GLOBALS['branch'] = $details['branch'];
// $GLOBALS['yoga'] = $details['yog'];
$GLOBALS['al_field'] = $details['field'];
//$GLOBALS['AUCP'] = $details['placed'];
$GLOBALS['al_ctc'] = $details['ctc'];


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
            <label for="exampleInputEmail1"><?php echo $al_name ?></label>
		  </div>
		  
		  <!-- <div class="form-group">
          <label for="exampleInputEmail1">RollNo:</label>
            <label for="exampleInputEmail1"> </label>
		  </div> -->
		  
		  <div class="form-group">
          <label for="exampleInputEmail1">Email:</label>
            <label for="exampleInputEmail1"><?php echo $al_email; ?></label>
		  </div>

                  

                  <div class="form-group">
                <label for="exampleInputEmail1">Contact:</label>
                <label for="exampleInputEmail1"><?php echo $al_contact; ?></label>
		  </div>

                  <!-- <div class="form-group">
                <label for="exampleInputEmail1">Class 10 percentage:</label>
                <label for="exampleInputEmail1"></label>

		  </div>  

                  <div class="form-group">
                <label for="exampleInputEmail1">Class 12 percentage:</label>
                <label for="exampleInputEmail1"></label>
		  </div>   -->

                  <div class="form-group">
                <label for="exampleInputEmail1"> CPI:</label>
                <label for="exampleInputEmail1"><?php echo $al_cpi; ?></label>
		  </div>

                  <!-- <div class="form-group">
                <label for="exampleInputEmail1">Course Completed:</label>
                <label for="exampleInputEmail1"></label>
		  </div>
                  <div class="form-group">
                <label for="exampleInputEmail1">Branch:</label>
                <label for="exampleInputEmail1"></label>
		  </div> 

                  <div class="form-group">
                <label for="exampleInputEmail1">Year of Graduation:</label>
                <label for="exampleInputEmail1"></label>
		  </div>

                   <div class="form-group">
                <label for="exampleInputEmail1">Area of Interest:</label>
                <label for="exampleInputEmail1"></label>
		  </div> 

                  <div class="form-group">
                <label for="exampleInputEmail1">Are you Currently Placed:</label>
                <label for="exampleInputEmail1"></label>
		  </div>

                  <div class="form-group">
                <label for="exampleInputEmail1">CTC(If Placed):</label>
                <label for="exampleInputEmail1"></label>
		  </div> -->
            <div class="form-group">
          <?php
        


        $sql = "SELECT * FROM alumni WHERE email = '$email'";
        $result = $conn->query($sql);
        // Display information if available, else display null
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // echo "<p>Student Name: " . $row["st_name"] . "</p>";
            // echo "<p>CPI: " . $row["cpi"] . "</p>";
            echo "<p>Company Name: " . $row["company"] . "</p>";
            echo "<p>CTC: " . $row["ctc"] . "</p>";
            echo "<p>Area: " . $row["field"] . "</p>";
            echo "<p>Position: " . $row["position"] . "</p>";
            echo "<p>Location: " . $row["location"] . "</p>";
            echo "<p>Working Tenure: " . $row["doj"] . "to". $row["dol"]. "</p>";
        } else {
            echo "<p>Null</p>";
        }

        $conn->close();
        ?>
            </div>
                    
		  
            <a href="alumnihome.php"><button type="submit" class="btn btn-primary">Go back</button></a>

		  
		</form>
            </div>
     </div>
     </div>



        </table>

        

</html>