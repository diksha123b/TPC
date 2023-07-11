<?php


// Get the form data
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    include 'db.php';
    $company_name = $_POST['companyname'];
    $email = $_POST['g_email'];
    $password=$_POST['password'];
    $cpass=$_POST['cpass'];
    $job_s = $_POST['job_s'];
    $job_sector = implode(",",$job_s);
    
    $job_type = $_POST['ftj'];
    $minimum_qualification = $_POST['minq'];
    $min_cpi = $_POST['mincpi'];
    $ctc = $_POST['ctc_o'];
    $ldat = $_POST['ldta'];

    $oc = $_POST['oc'];
    $py = $_POST['ctc_o'];

    $sql = "INSERT INTO `company`(`company_name`, `email`,`password`,`con_password`, `job_sector`, `job_type`, `min_q`, `min_c`, 
            `ctc`, `mode`,  `year`,`last`) VALUES ('$company_name','$email','$password','$cpass','$job_sector','$job_type',
            '$minimum_qualification','$min_cpi','$ctc','$oc','$py','$ldat')";


   
    $result = mysqli_query($con, $sql);
    if ($result) {
        // Success message
        echo "Thank you for submitting the form!";
        header("Location:companylogin.php");
    } else {
        // Error message
        echo "Error: " . $sql . "<br>" . mysqli_error($con);
    }

    // Close the database connection
    mysqli_close($con);
}
?>