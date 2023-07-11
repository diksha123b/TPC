<!DOCTYPE html>
<html>
<head>
	<title>Alumni login</title>
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
		.sign-up-link {
			font-size: 16px;
			text-align: right;
			display: block;
			margin-top: 10px;
		}
	</style>
</head>
<body>
	<div class="container">
		<h1>Alumni Login</h1>
		<form method="post" action="proce_alumni_login.php">
			<div>
				<label for="email">Email address:</label>
				<input type="email" id="email" placeholder="Enter email" name="email">
			</div>
            
			<div>
				<label for="pwd">Password:</label>
				<input type="password" id="pwd" placeholder="Enter password" name="pwd">
			</div>
			<div>
				<input type="submit" value="Submit" name="submit3">
			</div>
			<!-- <div>
				<style>h6{ text-align: right;}</style>
				<h6>Don't have an account?</h6>
				
				<a href="alumnidata.php" class="sign-up-link"> Sign Up</a>
			</div> -->
			
		</form>
	</div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16



