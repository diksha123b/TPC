<?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    $servername = "localhost";
    $username = "root";        
    $password = "";
    $dbname = "miniproject";

    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }




    // Get the form data
    if(isset($_POST["submit"]))
    {
        $company_name = $_POST['name'];
        $Roll = $_POST['rollno'];
        $email = $_POST['email'];
        $password = $_POST['password'];
        $confirm_password = $_POST['confirm-password'];
        $contact = $_POST['contact'];
        $ten_percent = $_POST['class10'];
        $twe_percent = $_POST['class12'];
        $c_cpi = $_POST['cpi'];
        $c_enrolled = $_POST['course'];
        $branch = $_POST['branch'];
        $yoga = $_POST['year'];

        $job_sector = $_POST['job_s'];
        $job_sector1 = implode(",",$job_sector);

        $AUCP = $_POST['status'];
        $iy = $_POST['ctc'];

        $sql = "INSERT INTO `studinfo`(`stud_name`, `roll`, `email`,`password`,`confirm_password`, `contact`, `ten_percent`, `twe_percent`, `c_cpi`, `c_enrolled`, `branch`, `yog`,`job_sector`,`placed`,`iyn`) VALUES ('$company_name','$Roll','$email','$password','$confirm_password','$contact','$ten_percent','$twe_percent','$c_cpi','$c_enrolled','$branch','$yoga','$job_sector1','$AUCP','$iy')";
        //$query123 ="INSERT INTO 'alumni' (al_name, email, password, contact, cpi) SELECT name, email, password, contact, c_cpi FROM studinfo WHERE DATE_FORMAT(NOW(), '%m-%d') > DATE_FORMAT(CONCAT('05-31-', yog), '%m-%d');"
        //$result123 = mysqli_query($conn,$query123);
        $result = mysqli_query($conn, $sql);

        if ($result) 
        {
            // Success message
            echo "<center><h1><b> You have Sucessfully Signed Up <b/></h1></center>  <a href='studloginn.php'>Login</a>";
        } 
        else 
        {
            // Error message
            echo "Error: " . $sql . "<br>" . mysqli_error($conn);
        }

        // Close the database connection
        mysqli_close($conn);
    }
    ?>
