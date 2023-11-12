<!DOCTYPE html>
<html lang="en">
<!-- <input type = "radio" name = "" value =""/> -->

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

	<style>
		:root {
			--primary: #831Bec;

			--secondary: #0d1d2a;
			--third: #1b263b;

		}

		label {
			/* border: 1px solid red; */
			margin: 9px;
		}

		body {
			margin: 0%;
			font-size: 16px;

			font-family: system-ui, -apple-system, BlinkMacSystemFont, Segon U, Hoboto, Oxygen, Ubuntu, Cantarell, "Open Sans", "Helvetica Neue", sans-serif;

		}

		form {
			background: var(--secondary);

			display: flex;
			Justify-content: center;

			align-items: center;

			height: 100vh;

		}

		footer {
			position: absolute;

			bottom: 0;

			height: 1.5rem;
			width: 0;
			height: 2.5rem;

			font-size: 1.2rem;
			background: var(--secondary);

			display: flex;

			Justify-content: center;

			align-items: center;

			color: white;
		}

		h1 {
			color: white;
			margin: 60px 0 0 0;
		}

		input {
			width: 80%;
			height: 40px;
			border-radius: 5px;
			border: none;
			border: 1px solid;
			margin: 0 !important;
		}

		input:focus {
			outline: var(--primary) 2px solid;
		}

		.card {
			display: flex;
			justify-content: center;
			flex-direction: row;
			border-radius: 25px;
			background: var(--third);
			height: 600px;
			width: 1200px;
			padding-inline: 40px;
			animation: 3s infinite border, 3s ease-out 5s slideout;

		}

		.card-pic {
			align-self: center;
			border-radius: 25px;

			width: 50%;
			border-radius: 25px;
			overflow: hidden;

		}

		.card-form {
			width: 50%;
			/* gap: 10%; */
			display: flex;
			justify-content: start;
			align-items: center;
			color: white;
			flex-direction: column;
		}

		.btn {

			height: 40px;

			width: 100px;

			border-radius: 5px;

			background: var(--primary);

			color: white;
			margin-top: 10px !important;
			margin: 10px 0;
		}

		.btn:hover {
			cursor: pointer;
			background: var(--third);
			transform: scale(1.05);
			border: var(--primary) 1px solid;
		}

		.icon {

			background-color: transparent;

			width: 50px;

			height: 50px;

		}

		@keyframes border {

			0% {

				box-shadow: 5px 0px 15px 5px var(--primary);

			}

			35% {

				box-shadow: 0px 5px 15px 5px var(--primary);

			}

			70% {

				box-shadow: -5px 0px 15px 5px var(--primary);

			}

			100% {

				box-shadow: 0px -5px 15px 5px var(--primary);

			}

		}

		.top a {
			/* border: 1px solid; */
			padding: 0 !important;

			color: black;
		}

		.top a:hover {
			color: red;
		}

		i {
			color: black;
			padding: 10px;
		}

		.top i:hover {
			color: red;
		}

		.top #logo {
			margin: 5px 0;
			/* border: 1px solid red; */
			height: 65px;
			display: flex;
			/* border: 2px solid; */
			box-shadow: rgba(0, 0, 0, 0.16) 0px 1px 4px;
			padding: 3px;
			justify-content: center;
			align-items: center;
		}

		#captcha {
			background-color: black;
			color: #fff;

			border: none;
			outline: none;
			margin-bottom: 9px !important;
			text-align: center;
			font-size: 18px;
		}

	.selection{
		display: flex;
		margin-top: 10px;
	}
	.selection input{
		size: 13px;
	}
	</style>
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
					<h1>LOGIN NOW!</h1>
						<div class="selection">
							<div class="option">
								<input type="radio" name="loginType" id="admin_id" value="admin" />
								<label for="contact_email">Admin</label>
							</div>
							
							<div class="option2">
								<input type="radio" name="loginType" id="counselor_id" value="counselor" />
								<label for="contact_email">counselor</label>
							</div>
						</div>

					

						<label for="email">Email:</label>

						<input type="email" name="email" id="email" />

						<label for="pass">Password:</label>

						<input type="password" name="pass" />

						<label for="pass-rep">Password repeat:</label>
						<input type="password" name="pass-rep" />

						<label for="pass-rep">Enter Captcha</label>
						<!-- <span  type="text" id="captcha" maxlength="3" minlength="3" name="captcha"></span> -->
						<input type="text" id="captcha" maxlength="3" minlength="3" name="captcha" />

						<input type="text" name="captchaInput" />
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
include "server.php";
$type=$_POST['loginType'];


if (isset($_POST['btnlogin'])) {
	$email = $_POST['email'];
	$pass = $_POST['pass'];
	$rpass = $_POST['pass-rep'];
	$location="";
	$flag=0;

	$captch_val_SYS = $_POST['captcha'];
	$captch_val_USER = $_POST['captchaInput'];
	echo "submited";
	if ($type == "admin") {          
		$query = "SELECT * FROM admin WHERE email='$email' && password='$pass'"; 
		$location=  "http://localhost/geu/dashboard.php";
		$flag=1;
	}
	else if($type=="counselor")
	{
		$flag=2;
		$query = "SELECT * FROM counc WHERE email='$email' && pass='$pass'";
		
	}
	echo "Flag is ===  $flag";
	if ($captch_val_SYS != $captch_val_USER) {
		?>
		<script type="text/javascript">
			alert("Captcha Dont Matched!");
		</script>
		<?php
	} else {
		if ($pass == $rpass) {
			
			$res = mysqli_query($conn, $query);
			if ($res) {
				if (mysqli_num_rows($res) > 0) {

					if($flag==1)
					{
						?>
					<script type="text/javascript">
						location.href="http://localhost/geu/dashboard.php";
					</script>
					<?php
					}else if($flag==2)
					{
						?>
					<script type="text/javascript">
						location.href="http://localhost/geu/couns.php";
					</script>
					<?php
					}

				} else
					echo "no row selected ! ";
			} else {
				echo "Pssword not matched !";
			}

		}
	}
} else {
	echo "Not submited";

}
?>

<script type="text/javascript">

	var a = Math.floor(Math.random() * 7);
	var b = Math.floor(Math.random() * 7);
	var c = Math.floor(Math.random() * 7);
	const res = "" + a + b + c;
	document.querySelector('input[name="captcha"]').value = res;



</script>