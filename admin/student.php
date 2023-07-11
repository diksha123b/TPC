<?php
//session_start();
//$email = $_SESSION['email'];
require_once('connection.php');
// $details = mysqli_fetch_assoc($con->query("select * from company where email='$email'"));

?>
<!DOCTYPE html>
<html> 
<head>
	<title><i>Student Info</i></title>
	<!-- Bootstrap CDN stylesheet link -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<style>
		h1 {
			text-align: center;
			margin-bottom: 15px;
			color: #080808; /* added white text color */
		}
		body {
			background-color: #f8f9fa; /* added light gray background color */
		}
		thead th {
			background-color: #131E3A; /* added blue background color to table headers */
			color: #fff; /* added white text color to table headers */
		}
		.table-hover tbody tr:hover {
			background-color: #f2f2f2; /* added light gray background color to table rows on hover */
		}
	</style>
	
</head>
<body>
	<div class="container">
	<button style="position: fixed; top: 10px; left: 65px; background-color:#131E3A; color: white; margin-top: 10px; margin-left: 10px;" onclick="window.history.back();">Go Back</button>
		<h1><i>Student Info</i></h1>
		<table class="table table-striped table-hover">
			<thead>
				<tr>
					<th> Name</th>
					<th>Roll No</th>
                    <th>Email</th>
					<th>Branch</th>
					<th>Course</th>
					<th>cpi</th>
					<th>Operation1</th>
                    <th>Operation2</th>

					
				</tr>
                
			</thead>
			<tbody>
            <tr>
                <?php
				// $id = $GLOBALS['id'];

				$query="select * from studinfo";
				$result=mysqli_query($con,$query);
				if(mysqli_num_rows($result)>0){
					foreach($result as $row){
						?>
						<tr>
							<td>
								<?= $row['stud_name']; ?>
					</td>
					<td>
						<?= $row['roll']; ?> 
					</td>
					<td>
						<?= $row['email']; ?> 
					</td>
					<td>
						<?= $row['branch']; ?> 
					</td>
					<td>
						<?= $row['c_enrolled']; ?> 
					</td>
                    <td>
						<?= $row['c_cpi']; ?> 
					</td>
					<td>
						<a href = "studupdate.php?roll=<?= $row["roll"]; ?>" class="btn btn-dark">Update</a>

					</td>
					<td>
					<a href = "delete.php?roll=<?= $row["roll"]; ?>" class="btn btn-danger">Delete</a>


					</td>
						</tr>
						<?php
					}
				}
				else{
					?>
					<tr>
						<td colspan ="4"> NO record</td>
				</tr>
				<?php
				}
				?>
			</tbody>
		</table>
	</div>
	<!-- Bootstrap CDN scripts -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous



