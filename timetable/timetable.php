<?php
	$sem = 3;
	$branch = "IT";
	$rno = '604';
	$conn = mysqli_connect("localhost","root","","timetabler");

	function filldata($d,$st,$semester,$r,$br)
	{
		//ask for subject , faculty and roomno
		$subject = "<script>prompt('Enter Subject');</script>";
		echo subject;
		//$sql_insert = "INSERT INTO `tbl` values ('".$d."', ".$st." , "", "", "", "", "");"
	}
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Time Table</title>
	<?php 
		require_once 'libs.php';
	 ?>
	 <style type="text/css">
	 	.inputbox{
	 		display: flex;
	 		justify-content: center;
	 		align-items: center;
	 	}
	 </style>
</head>
<body>
	<?php 
		require_once 'nav.php';	
	 ?>
	<div class="container">
		<div class="table-responsive table-bordered" style="text-align:center">
  			<table class="table">
				<thead>
					<tr>
						<th>Start Time : </th>
						<?php
							for($i=8;$i<=15;$i++)
								echo "<th> ".$i.":30 </th>";
						?>
					</tr>
					<tr>
						<th>End Time : </th>
						<?php					 
							for($i=9;$i<=16;$i++)
								echo "<th> ".$i.":30 </th>";
						?>
					</tr>
				</thead>
		 		<tbody>
					<?php
						$day = array("Monday","Tuesday","Wednesday","Thursday","Friday");
						for($i=0;$i<5;$i++)
						{
							echo "<tr>";
								echo "<th>".$day[$i]."</th>";
								for($j=8;$j<16;$j++)
								{
									$query = "
									SELECT `Subject`,`Division`,`Faculty` FROM `tbl` 
									WHERE Day='".$day[$i]."' and StartTime=".$j." and Semester=".$sem." and RoomNo='".$rno."' and Branch='".$branch."';";
									echo "<td>";
									$result = mysqli_query($conn,$query);
									while ($row = mysqli_fetch_array($result)) {
										if($row['Subject'] == 'PCT')
											$row['Subject'] = 'PC-Tut';
										else if($row['Subject'] == 'MathsT')
											$row['Subject'] = 'Maths-Tut';
										echo 	
										"<div class='subjectName'>"
											.$row['Subject'].
										"</div>".
										"<div class='divisionName'>"
											.$row['Division'].
										"</div>".
										"<div class='facultyName'>"
										.$row['Faculty'].
										"</div>".
										"<div class='Update btn btn-info'>"
											."
											<span class='glyphicon glyphicon-pencil'></span>".
										"</div>".
										"<div class='Clear btn btn-danger'>"
											."".
										"</div>";

									}
									if(mysqli_num_rows($result) == 0)
									{
										echo "<div class='btn btn-primary'>+</div>";
									}
									echo "</td>";
								}
							echo "</tr>";
						}
					 ?>

				</tbody>
  			</table>
		</div>
	</div>
</body>
</html>