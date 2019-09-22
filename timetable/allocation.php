<!DOCTYPE html>
<html>
<head>
	<title>Load Allocation</title>
	<?php require_once 'libs.php'; ?>
	<link rel="stylesheet" type="text/css" href="style.css">
	<style type="text/css">
		.card{
			display: block;
			padding: 20px;
		}
		.form-control
		{
			background: transparent;
			border: 0;
			border-bottom: 1px solid white;
			border-radius: 0px;
			color: white;
		}
		.btn
		{
			font-family: arial;
			font-size: 2rem;
		}
		.col-md-10 label{
			position: absolute;
			top: 0;
			left: 0;
			font-size: 2rem;
			transition: all .25s ease-in-out;
		}
		.form-control
		{
			background: transparent;
			border: 0;
			border-bottom: 1px solid white;
			border-radius: 0px;
			color: white;
			-webkit-box-shadow: inset 0 0 0 rgba(0,0,0,0),0 0 0 rgba(0,0,0,0);
			box-shadow: inset 0 0 0 rgba(0,0,0,0),0 0 0 rgba(0,0,0,0);
		}
		.form-control:focus{
			-webkit-box-shadow: inset 0 0 0 rgba(0,0,0,0),0 0 0 rgba(0,0,0,0);
			box-shadow: inset 0 0 0 rgba(0,0,0,0),0 0 0 rgba(0,0,0,0);
		}
		input:focus ~ label,
		input:valid ~ label
		{
			left: 10px;
			font-size: 1.5rem;
			top:-15px;
		}
	</style>
</head>
<body>
	<?php 
		require_once 'nav.php';
	 ?>
	<div class="container">
		<div class="row">
			<div class="col-md-5">
				<div class="card" style="height: auto">
					<h1><i class="fas fa-chalkboard-teacher" style="color: white;"></i></h1><h1><u>Faculty</u></h1><br>
					<form name="facultyAllocation" action="facultyAllocation.php" method="POST">
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<input type="text" name="sdrn" class="form-control" value="" required="1">
								<label for="sdrn" class="label">SDRN </label>
							</div>
							<div class="col-md-1"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<input type="text" name="name" class="form-control" value="" required="1">
								<label for="name" class="label">Name </label>
							</div>
							<div class="col-md-1"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<input type="text" name="Designation" class="form-control"  required="1">
								<label for="Designation" class="label">Designation</label>
							</div>
							<div class="col-md-1"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<input type="number" name="Experience" class="form-control" required="">
								<label for="Experience" class="label">Experience</label>
							</div>
							<div class="col-md-1"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-10">
								<select name="aval" style="font-size: 0.8em;width: 100%;background-color: transparent;color: white;border: 0;border-bottom: 1px solid white">
									<option value="FT">Full time</option>
									<option value="FH">First Half</option>
									<option value="SH">Second Half</option>
								</select>
							</div>
							<div class="col-md-1"></div>
						</div>
						<br>
						<div class="row">
							<div class="col-md-1"></div>
							<div class="col-md-5">
								<input type="submit" name="submit" class="btn btn-success" value="Success">
							</div>
							<div class="col-md-5">
								<input type="reset" name="reset" class="btn btn-danger" value="Clear">
							</div>
							<div class="col-md-1"></div>
						</div>
						<br><br>
					</form>
				</div>
			</div>
			<div class="col-md-2"></div>
			<div class="col-md-5">
				<div class="card" style="height: 500px">
					
				</div>
			</div>
		</div>
	</div>
</body>
</html>