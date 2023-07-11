<?php
session_start();

$email = $_SESSION['email'];
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "miniproject";

$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
} else "connected";



// if(!isset($_SESSION['email'])){
//         header('Location: companylogin.php');
//         exit();
//     }






$details = mysqli_fetch_assoc($conn->query("select * from company where email ='$email'"));


$GLOBALS['companyname'] = $details['company_name'];
$GLOBALS['g_email'] = $details['email'];
$GLOBALS['password'] = $details['password'];
$GLOBALS['cpass'] = $details['con_password'];
$GLOBALS['job_s'] = $details['job_sector'];
$GLOBALS['ftj'] = $details['job_type'];
$GLOBALS['minq'] = $details['min_q'];
$GLOBALS['mincpi'] = $details['min_c'];
$GLOBALS['ctc_o'] = $details['ctc'];
$GLOBALS['ldta'] = $details['last'];

$GLOBALS['y_s'] = $details['year'];
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
                                                                        <label for="exampleInputEmail1">Name of Company: </label>
                                                                        <label for="exampleInputEmail1"><?php echo $companyname ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Email:</label>
                                                                        <label for="exampleInputEmail1"> <?php echo $g_email; ?></label>
                                                                </div>




                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Password:</label>
                                                                        <label for="exampleInputEmail1"><?php echo $password; ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Confirm Password</label>
                                                                        <label for="exampleInputEmail1"><?php echo $cpass; ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Job_Sector:</label>
                                                                        <label for="exampleInputEmail1"><?php echo $job_s; ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Job Type:</label>
                                                                        <label for="exampleInputEmail1"><?php echo $ftj; ?></label>
                                                                </div>
                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Minimum Qualification:</label>
                                                                        <label for="exampleInputEmail1"><?php echo $minq; ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Minimum CPI:</label>
                                                                        <label for="exampleInputEmail1"><?php echo $mincpi; ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">CTC Offered</label>
                                                                        <label for="exampleInputEmail1"><?php echo $ctc_o; ?></label>
                                                                </div>

                                                                <div class="form-group">
                                                                        <label for="exampleInputEmail1">Last Date to Apply:</label>
                                                                        <label for="exampleInputEmail1"><?php echo $ldta; ?></label>
                                                                </div>

                                                                

                                                        </div>

                                                        <div class="form-group">
                                                                <label for="exampleInputEmail1">Year Since Recruiting From IIT Patna:</label>
                                                                <label for="exampleInputEmail1"><?php echo $y_s; ?></label>
                                                        </div>



                                                        <button type="submit" class="btn btn-white"> <a href="recruithome.php">Go back</button></a>

                                                        </form>
                                                </div>
                                        </div>
                                </div>



                                </table>
</html>