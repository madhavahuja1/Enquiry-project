<!-- PHP code to establish connection with the localserver -->


<?php

// Username is root
$user = 'root';
$password = '';
error_reporting(0);

$database = 'loginnow';

$servername='localhost';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

$sql = " SELECT * FROM erashan";
$result = $mysqli->query($sql);
// // $mysqli->close();
// if($_POST['searchEvent'])
// {
// 	$cname=$_POST['cname'];
// $sql = " SELECT * FROM erashan WHERE CandidateName='$cname'";
// $flag=1;
// $result = $mysqli->query($sql);
// // $mysqli->close();
// }


// include "server.php";
if(isset($_POST['searchPhotoEvent']))
{
	$searchName=$_POST['searchImg'];
 echo "Name of Candidate is .$searchName";
 $selectQur="SELECT * from imgurl WHERE name='$searchName'";
 $result1 = mysqli_query($mysqli, $selectQur);
 $result2 = mysqli_fetch_assoc($result1);    
 if($result1)
 {
	//  echo "$result1";
	 $url1="./webcam/upload/";
	  $url2= $result2['url'];
	  $mainurl=$url1.$url2;
	//  echo $mainurl;
	  
 echo '<img src="'.$mainurl.'" "/>';

 }
}
?>
<!-- HTML code to display data in tabular format -->
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>Candidate Data</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: 0 auto;
			font-size: large;
			border: 1px solid black;
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			background-color: #E4F5D4;
			border: 1px solid black;
		}

		th,
		td {
			font-weight: bold;
			border: 1px solid black;
			padding: 10px;
			text-align: center;
		}

		td {
			font-weight: lighter;
		}
		form input{
			padding: 14px 16px;
			margin: 9px;
		}
		form input[ type="submit"]{
			cursor: pointer;
		}
		.logout{
			margin:10px;
			padding: 10px; 
			display: flex;
			justify-content: end;
		}
		.logout button{
			padding: 14px 17px;
			border: none;
			border-radius: 5px;
background-color: #ff0000;
color: #fff;
			border: 1px solid #ddd;
			cursor: pointer;
		}
		.logout button:hover{
			background-color: #006600;
		}
	</style>
</head>

<body>

   <div class = "logout">
   <a  href="./index.php" target="_madhav"> <button class="enquiry">Logut <i class="fa-solid fa-arrow-right"></i> </button>
   </a>
   </div>
	<section>
		<h1>Welcome TO ADMIN Panel</h1>
		<h1>Candidate Details</h1>
		<div>
    <form action="" method="POST">
        <input type="text" placeholder="Enter Student Name" name="cname">
        <input type="submit" name="searchEvent" value="Search Student" >
    
    </form>
    <form action="" method="POST">
        <input type="text" placeholder="Search Student Photo" name="searchImg">
        <input type="submit" name="searchPhotoEvent" value="Search Student Photo" >
    
    </form>
    </div>
		<!-- TABLE CONSTRUCTION -->
		<table>
			<tr>
				<th>CandidateName</th>
				<th>FatherName</th>
				<th>Gender</th>
				<th>Address</th>
				<th>FatherPhoneNumber</th>
				<th>CandiatePhoneNumber</th>
				<th>StudentEmail</th>
				<th>GuardiansEmail</th>
				<th>10 %</th>
				<th>12 %</th>
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
				<td><?php echo $rows['Fatherphonenumber'];?></td>
				<td><?php echo $rows['Candidatephonenumber'];?></td>
				<td><?php echo $rows['studentemail'];?></td>
				<td><?php echo $rows['guardiansemail'];?></td>
				<td><?php echo $rows['a4'];?></td>
				<td><?php echo $rows['a8'];?></td>
			</tr>
			<?php
				}
			?>
			
		</table>
	</section>
<?php

?>
	
</body>

</html>

