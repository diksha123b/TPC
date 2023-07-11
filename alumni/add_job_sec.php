

<!DOCTYPE html>
<html>
<head>
	<title>Add Job Section</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<!-- Custom CSS -->
	<style>
		body {
			background-color: #f2f2f2;
		}
		.form-control:focus {
			border-color: #000080;
			box-shadow: none;
		}
		input[type="submit"] {
  background-color: #008CBA; /* Green background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 24px; /* Some padding */
  text-align: center; /* Center text */
  text-decoration: none; /* Remove underline */
  display: inline-block; /* Make it an inline element */
  font-size: 16px; /* Increase font size */
  margin: 4px 2px; /* Add some margin */
  cursor: pointer; /* Add cursor on hover */
  border-radius: 4px; /* Add border radius */
}

input[type="submit"]:hover {
  background-color: #000080; /* Dark green background on hover */
}
		


	</style>

    
    
</head>
<body>

	<div class="container my-5">
		<div class="row justify-content-center">
			<div class="col-md-8">
				<div class="card">
					<div class="card-header bg-info text-white custom-bg">Add Job Section</div>

					<div class="card-body">
						<form action="process_addjob.php" method="POST">
							<div class="form-group">
								<label for="company-name"><b>Company Name:</b></label>
								<input type="text" name="company_name" id="company_name" class="form-control" required>
							</div>
							<!-- <div class="form-group">
								<label for="email"><b>Field:</b></label>
								<input type="text" name="field" id="field" class="form-control" required>
							</div>                            -->
                            <div class="form-group">
								<label for="email"><b>Position:</b></label>
								<input type="text" name="position" id="position" class="form-control" required>
							</div>
                            <div class="form-group">
								<label for="email"><b>Location:</b></label>
								<input type="text" name="location" id="location" class="form-control" required>
							</div>

                            <div class="form-group">
                            <label for="year"><b>CTC:</b></label>
                            <input type="bigint" class="form-control" id="ctc" name="ctc" required>
                            </div>

                            <div class="form-group">
        <label for="year"><b>Date of Joining (yyyy-mm-dd format):</b></label>
        <input type="date" class="form-control" id="doj" name="doj" required>
      </div>
      <div class="form-group">
        <label for="year"><b>Date of Leaving (yyyy-mm-dd format):</b></label>
        <input type="date" class="form-control" id="dol" name="dol">
      </div>
      <div class="form-group">
								<label for="job-sector"><b>Field:</b></label>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="field[]" id="it" value="IT">
									<label class="form-check-label" for="it">IT</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="field[]" id="finance" value="Finance">
									<label class="form-check-label" for="finance">Finance</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="field[]" id="consulting" value="Consulting">
									<label class="form-check-label" for="consulting">Consulting</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="field[]" id="ecommerce" value="ECommerce">
									<label class="form-check-label" for="ecommerce">E-Commerce</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="field[]" id="teaching" value="Teaching">
									<label class="form-check-label" for="teaching">Teaching</label>
								</div>
								<div class="form-check">
									<input class="form-check-input" type="checkbox" name="field[]" id="other" value="Other">
									<label class="form-check-label" for="other">Other</label>
								</div>
							</div>
                            
							<a href="alumnihome.php" class="btn btn-dark btn-custom-1">Submit</a>
        
		
		
        
	
	
  

