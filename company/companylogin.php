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
    if(isset($_POST["submit"]))
    {
        session_start();
        $email = $_POST['email'];
        $password = $_POST['pwd'];
        
        $_SESSION['email'] = $email; 

         // Start PHP session

    //     if(isset($_POST['email']) && isset($_POST['pwd'])){ // Check if username and password are submitted
    //     $email = $_POST['email'];
    //     $password = $_POST['pwd'];
    
    //     if($email == "g_email" && $password == "your_password"){ // Check if username and password are correct
    //         $_SESSION['username'] = $username; // Set session variable for the username
    //         header('Location: dashboard.php'); // Redirect to the dashboard page
    //         exit();
    //     }
    //     else{
    //         $_SESSION['error'] = "Invalid username or password."; // Set session variable for error message
    //         header('Location: login.php'); // Redirect back to the login page
    //         exit();
    //     }
    // }
    // else{
    //     $_SESSION['error'] = "Please enter username and password."; // Set session variable for error message
    //     header('Location: login.php'); // Redirect back to the login page
    //     exit();
    // }
    
        

// Use the email variable in your code
        // echo "Welcome, $email!";
        if (!$email || !$password){
            header("Location: companylogin.php");
        }
        else{
            $sql = "select * from `company` where `email`='$email' and `password`='$password'";
            $result = mysqli_query($conn, $sql);
        

        
        // echo"$result";

            if ($result) 
            {
                // Success message
                $_SESSION['email'] = $email;
                
                header("Location: recruithome.php");
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

?>



<!DOCTYPE html>
<html>
<head>
	<title>Company login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		body {
			background-color: #F5F5F5;
			font-family: Arial, sans-serif;
			background-size: 100%;
          background-image: url("https://media.istockphoto.com/id/1279615641/vector/abstract-blue-background-geometric-texture.jpg?s=612x612&w=0&k=20&c=hJoOBakUkcGCzbdMU2W5MRyaNXYBwwpCI12CEVMP1Qc=")
		}
		.container {
			background-color: #FFFFFF;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			max-width: 500px;
			margin: 50px auto;
			padding: 20px;
		}
		input[type="email"], input[type="password"] {
			width: 100%;
			padding: 10px;
			margin: 10px 0px;
			border-radius: 3px;
			border: 1px solid #DDDDDD;
			box-sizing: border-box;
			font-size: 16px;
			height: 45px;
		}
		input[type="submit"] {
			background-color: #008CBA;
			border: none;
			color: white;
			padding: 10px 20px;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-size: 16px;
			margin: 10px 0px;
			border-radius: 3px;
			cursor: pointer;
			width: 100%;
			height: 45px;
			transition: all 0.2s ease-in-out;
		}
		input[type="submit"]:hover {
			background-color: #00688B;
			transform: translateY(-2px);
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
		}
		h1 {
			text-align: center;
			margin-top: 50px;
			margin-bottom: 30px;
			font-size: 36px;
			font-weight: bold;
		}
		label {
			font-weight: bold;
			font-size: 18px;
		}
		.forgot-password-link {
			font-size: 20px;
			text-align: right;
			display: block;
			margin-top: 10px;
			color:#000E3A
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Company Login</h1>
		<form method="post" action="companylogin.php">
			<div>
				<label for="email">Email address:</label>
				<input type="email" id="email" placeholder="Enter email" name="email">
			</div>
            
			<div>
				<label for="pwd">Password:</label>
				<input type="password" id="pwd" placeholder="Enter password" name="pwd">
			</div>
			<div>
				<input type="submit" value="Submit" name="submit">
			</div>
			<div>
				<a href="recruiter_reg.php" class="forgot-password-link">Sign up</a>
			</div>
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16



