
    <?php
    error_reporting(E_ALL);
    ini_set('display_errors', 1);


    $servername = "localhost";
    $username = "root";        
    $password = "";
    $dbname = "miniproject";

    $con = mysqli_connect($servername, $username, $password, $dbname);
    if (!$con) {
        die("Connection failed: " . mysqli_connect_error());
    }




    // Get the form data
    if(isset($_POST["submit1"]))
    {
        $company_name = $_POST['name'];
        $Roll = $_POST['rollno'];
        $email = $_POST['email'];
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

        $sql = "INSERT INTO `student_info`(`stud_name`, `roll`, `email`, `contact`, `ten_percent`, `twe_percent`, `c_cpi`, `c_enrolled`, `branch`, `yog`,`job_sector`,`placed`,`iyn`) VALUES ('$company_name','$Roll','$email','$contact','$ten_percent','$twe_percent','$c_cpi','$c_enrolled','$branch','$yoga','$job_sector1','$AUCP','$iy')";
        $result = mysqli_query($con, $sql);

        if ($result) 
        {
            // Success message
            echo "Thank you for submitting the form!";
           
        } 
        else 
        {
            // Error message
            echo "Error: " . $sql . "<br>" . mysqli_error($con);
        }

        // Close the database connection
        mysqli_close($con);
    }
    ?>
