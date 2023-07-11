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
    if(isset($_POST["submit3"]))
    {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        
        $_SESSION['email'] = $email; 
        

// Use the email variable in your code
        // echo "Welcome, $email!";

        $sql = "select * from `alumni` where `email`='$email' and `password`='$password'";
        $result = mysqli_query($conn, $sql);

        if ($result) 
        {
            // Success message
            header("Location: alumnihome.php");
            exit();
            
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
