<?php
    $servername = "localhost";
    $username = "root";        
    $password = "";
    $dbname = "miniproject";
    $conn = mysqli_connect($servername, $username, $password, $dbname);
    if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
    }
    else "connected";
    // Get the form data
    if(isset($_POST["submit2"]))
    {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        $_SESSION['email'] = $email; 
        if (!$email || !$password){
            header("Location: studloginn.php");
        }
        else{
            $sql = "select * from `studinfo` where `email`='$email' and `password`='$password'";
            $result = mysqli_query($conn, $sql);
        // echo"$result";

            if ($result) 
            {
                // Success message
                $_SESSION['email'] = $email;
                $_SESSION['roll'] = $roll;
                header("Location: studhome.php");
                exit();
                
            } 
            else 
            {
                // Error message
                echo "Error: " . $sql . "<br>" . mysqli_error($conn);
            }
        }
        // Close the database connection
        mysqli_close($conn);
    }
