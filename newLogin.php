<?php  

$username="root";
$db="loginnow";
$server="localhost";
$password="";

$conn=mysqli_connect($server,$username,$password,$db);
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

	
	<title>Document</title>
</head>

<body>
<nav class='navbar'>

<div class="top">
<a href="./index.php"><i class="fa-solid fa-house"></i>| About GEU Dehradun</a>
<div id="logo">
                    <strong> ग्राफ़िक एरा विश्वविद्यालय (जीईयू)</strong>

                    <img src="./img/logo.jpg" alt=logo width="60" height="40"> <strong>Graphic Era
                        university(GEU)</strong>
</div>
</div>
<div>
	<form method="POST">

		<div class="card">

			<div class="card-form">

				<h1>Admin</h1>

				<label for="email">Email:</label>

				<input type="email" name="email" id="email" />

				<label for="pass">Password:</label>

				<input type="password" name="pass" />

				<label for="pass-rep">Password repeat:</label> 
				<input type="password" name="pass-rep" />

				<input type="submit" value="Login" name="btnlogin" class="btn" />

			</div>

			<div class="card-pic">
				<img src="./img/dress.jpg" alt="" />

			</div>

		</div>
	</form>
</body>

</html>



<?php
// include "server.php";

if(isset($_POST['btnlogin']))
{
	echo "submited";

	$email=$_POST['email'];
	$pass=$_POST['pass'];
	$rpass=$_POST['pass-rep'];

	if($pass==$rpass)
	{
		$query="SELECT * FROM admin WHERE email='$email' && pass='$pass'";
		$res=mysqli_query($conn,$query);
	if($res)
	{
		if(mysqli_num_rows($res)>0)
		{
			
			?>
<script type="text/javascript">
 window.location = "http://localhost/geu/dashboard.php";
</script>      
    <?php
			
		}
		else
		echo "no row selected ! ";
	}
	else
	{
		echo "Pssword not matched !";
	}
	
	}
	

}

?>
