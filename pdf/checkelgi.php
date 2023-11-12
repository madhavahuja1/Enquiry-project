<?php 
$password = '';
error_reporting(0);

// Database name is geeksforgeeks
$database = 'loginnow';
$user = 'root';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}
$highSchool=75;
$sql = " SELECT * FROM erashan WHERE a4>='$highSchool'";
$result = $mysqli->query($sql);
?>
<html>
    <body>
        <h1>All Eligible Student</h1>
        <table border="1">
			<tr>
				<th>CandidateName</th>
				<th>FatherName</th>
				<th>Gender</th>
				<th>Address</th>
				
				<th>10th%</th>
				<th>12th%</th>
				<th>Pay Now</th>
				
			</tr>
			<!-- PHP CODE TO FETCH DATA FROM ROWS -->
			<?php
				// LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr>
				<!-- FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN -->
				<td><?php echo $rows['CandidateName'];?></td>
				<td><?php echo $rows['FatherName'];?></td>
				<td><?php echo $rows['Gender'];?></td>
				<td><?php echo $rows['Address'];?></td>
				<td><?php echo $rows['a4'];?></td>
				<td><?php echo $rows['a8'];?></td>
				<td><a href="./feespay.php">Pay Fees</a></td>
			
			</tr>
			<?php
				}
                  

			?>
			 
		</table>
		<center>
			<p><b>GEU bruchre</b></p>
			<a href="GEUv.pdf" target ="_madhav"> </a>
		</center>

    </body>
</html>
