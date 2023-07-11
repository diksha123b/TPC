<!DOCTYPE html>
<html>
<head>
	<title>Button Page</title>
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style type="text/css">
		.btn-custom {
			color: #fff;
			font-size: 2em;
			padding: 1em 1.5em;
			margin-bottom: 1em;
			border: none;
			border-radius: 0;
			cursor: pointer;
		}
		.btn-custom-1 {
			background-color: #2196F3;
		}
		.btn-custom-2 {
			background-color: #4CAF50;
		}
		.btn-custom-3 {
			background-color: #FF5722;
		}
		.btn-custom:hover {
			opacity: 0.9;
		}
	</style>
</head>
<body>
	<div class="container text-center">
		<h1>Yearwise Stats</h1>
		<a href="y_pie.php" class="btn btn-custom btn-custom-1">View Piechart</a>
		<a href="y_bar.php" class="btn btn-custom btn-custom-2">View Barchart</a>
		<a href="y_line.php" class="btn btn-custom btn-custom-3">View linechart</a>
	</div>
	<!-- Bootstrap JS -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</body>
</html>


