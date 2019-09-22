<?php 
	$conn = mysqli_connect("localhost","root","","timetabler");
	$sdrn = $_POST['sdrn'];
	$name = $_POST['name'];
	$desg = $_POST['Designation'];
	$exp = $_POST['Experience'];
	$aval = $_POST['aval'];	
	if(!$conn)
	{
		die("Error connecting the DB ".mysqli_error($conn));
	}
	$sql = "INSERT INTO faculties VALUES ('$sdrn','$name','$desg','exp','aval')";
	if (mysqli_query($conn, $sql)) {
		echo "New record created successfully";
	} else {
		echo "Error: " . $sql . "<br>" . mysqli_error($conn);
	}
	mysqli_close($conn);
 ?>