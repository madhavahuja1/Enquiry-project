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
	<head>
		<style>
			.accordion {
  width: 100%;
}

.accordion-item {
  margin-bottom: 10px;
}

.accordion-heading {
  background-color: #f5f5f5;
  color: #333;
  padding: 10px;
  cursor: pointer;
}

.accordion-content {
  padding: 10px;
  display: none;
  background-color: #fff;
  color: #333;
}

.accordion-content p {
  margin: 0;
}

.accordion-content.show {
  display: block;
}
		</style>
	</head>
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
				<td><?php echo $rows['Program Interested'];?></td>
				<td><a href="./feespay.php">Pay Fees</a></td>
			
			</tr>
			<?php
				}
                  

			?>
			 
		</table>
		<center>
		<div class="accordion">
    <div class="accordion-item">
      <div class="accordion-heading" onclick="toggleAccordion(this)">GEU B</div>
      <div class="accordion-content">
        <p>	<a href="./pdf/GEU.pdf" target ="_madhav">GEU brouchre</a></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-heading" onclick="toggleAccordion(this)">GEU COURSE</div>
      <div class="accordion-content">
        <p><a href="./pdf/B.Tech.pdf" target ="_madhav">B.tech</a></p>
      </div>
    </div>
    <div class="accordion-item">
      <div class="accordion-heading" onclick="toggleAccordion(this)">GEU COURSE</div>
      <div class="accordion-content">
        <p><a href="./pdf/BCA.pdf" target ="_madhav">BCA</a><br>.</p>
      </div>
    </div>
  </div>
	
		</center>
		
    </body>
	<script>

function toggleAccordion(element) {
  var accordionItem = element.parentNode;
  accordionItem.classList.toggle("active");

  var accordionContent = accordionItem.querySelector(".accordion-content");
  accordionContent.classList.toggle("show");
}
	</script>
</html>
