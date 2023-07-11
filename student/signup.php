<!DOCTYPE html>
<html>
<head>
	<title>Sign Up</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<style type="text/css">
		body {
			background-color: #F5F5F5;
			font-family: Arial, sans-serif;
		}
		.container {
			background-color: #FFFFFF;
			border-radius: 5px;
			box-shadow: 0px 0px 5px 0px rgba(0,0,0,0.2);
			max-width: 700px;
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

		.forgot-password-link {
			font-size: 16px;
			text-align: right;
			display: block;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1> Sign Up</h1>


        <?php if (isset($error)): ?>
            <p><?php echo $error; ?></p>
            <?php endif; ?>    

		<form action="process_stud.php" method="POST">
            <div class="form-group">
				<label for="name"><b> Name:</b></label>
				<input type="text" name="name" id="name" placeholder="Enter Name" class="form-control" required>
			</div>

            <div class="form-group">
				<label for="rollno"><b>RollNo:</b></label>
				<input type="text" name="rollno" id="rollno" placeholder= "Roll no" class="form-control" required>
			</div>    

            
			<div>
				<label for="email"> <b>Email address:</b></label>
				<input type="email" id="email" placeholder="Enter email" name="email">
			</div>

            <script>
            function validatePassword() 
            {
            var password = document.getElementById("password").value;
            var confirmPassword = document.getElementById("confirm-password").value;

            if (password != confirmPassword) {
            alert("Passwords do not match.");
            return false;
            }
            return true;
            }
            </script>

 
        <form onsubmit="return validatePassword()">
        <label for="password"><b>Password:  </b></label>
        <input type="password" id="password" name="password" required>

        <label for="confirm-password"><b>Confirm Password: </b></label>
      <input type="password" id="confirm-password" name="confirm-password" required>
			<div>

            <div class="form-group">
				<label for="contact"><b>Contact No:</b></label>
				<input type="text" name="contact" id="contact" placeholder= "Contact"class="form-control" required>
			</div>

            <div class="form-group">
                <label for="class10"><b>Class 10 Percentage:</b></label>
                <input type="number" class="form-control" id="class10" name="class10" min="0" max="100" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="class12"><b>Class 12 Percentage:</b></label>
                <input type="number" class="form-control" id="class12" name="class12" min="0" max="100" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="cpi"><b>Current CPI:</b></label>
                <input type="text" class="form-control" id="cpi" name="cpi" min="0" max="10" step="0.01" required>
            </div>

            <div class="form-group">
                <label for="course"><b>Course Enrolled:</b></label>
                <input type="text" class="form-control" id="course" name="course" required>
            </div>

            <div class="form-group">
                <label for="branch"><b>Branch:</b></label>
                <input type="text" class="form-control" id="branch" name="branch" required>
            </div>

            <div class="form-group">
                <label for="year"><b>Year of Graduation:</b></label>
                <input type="text" class="form-control" id="year" name="year" required>
            </div>
            <div class="form-group">
								<label for="job-sector"><b>Area of Interest:</b></label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="it" value="IT">
									<label class="form-check-label" for="it">IT</label>
								</div>
                                <div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="finance" value="Finance">
									<label class="form-check-label" for="finance">Finance</label>
								</div>

                                <div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="consulting" value="Consulting">
									<label class="form-check-label" for="consulting">Consulting</label>
								</div>

                                <div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="ecommerce" value="ECommerce">
									<label class="form-check-label" for="ecommerce">E-Commerce</label>
								</div>

                                <div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="teaching" value="Teaching">
									<label class="form-check-label" for="teaching">Teaching</label>
								</div>

                                <div class="form-check">
									<input class="form-check-input" type="checkbox" name="job_s[]" id="other" value="Other">
									<label class="form-check-label" for="other">Other</label>
								</div>
            </div>

                        <label for="status"><b>Are you currently placed ?</b></label>
                            <div>
                            </div>
		                    <input type="radio" id="yes" name="status" value="yes">
		                    <label for="yes">Yes</label>
                            <div>
                            </div>
		                    <input type="radio" id="no" name="status" value="no">
		                    <label for="no">No</label>
	                        
							<div class="form-group">
                            <label for="year"><b>If yes,what is your CTC ?</b></label>
                            <input type="text" class="form-control" id="ctc" name="ctc" required>
                            </div>

			
				<input type="submit" value="Submit" name = "submit">
			</div>


		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16



