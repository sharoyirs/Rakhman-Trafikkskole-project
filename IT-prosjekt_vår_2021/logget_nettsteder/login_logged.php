<?php

$host = "localhost";
$user = "root";
$password = "123asdqwe";
$db = "rakhman_trafikkskole";

$con = mysqli_connect($host, $user, $password);

mysqli_select_db($con, $db);

if(isset($_POST['email'])) {
	$email = $_POST['email'];
	$password = $_POST['password'];

	$sql = "SELECT * FROM logg_inn WHERE epost='".$email."' AND passord = '".$password."' LIMIT 1";

	$result = mysqli_query($con, $sql);

	if(mysqli_num_rows($result)==1) {
		header("location: ./login_wrong_pass.php");

		echo "Du har logget deg inn";
		exit();
	}
	else {
		header("location: ./login_wrong_pass.php");
	}
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Logg inn</title>
		<link rel="stylesheet" href="../css/login.css" />
		<link rel="preconnect" href="https://fonts.gstatic.com" />
		<link
			href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
			rel="stylesheet"
		/>
		<style>
			.loggedin_section {
				display:flex;
				flex-direction: column;
				padding-right: 20px;
				padding-bottom: 5px;
				width: 139.29px;
			}

			.loggedin_section p{
				font-weight: 700;
				font-size: 1.1em;
			}

			.loggedin_section a {
				text-decoration: none;
				padding: 3px;
				border: none;
				background-color:red;
				text-align:center;
				border-radius:50px;
				color: white;
				width: 100px;
			}
		</style>
	</head>
	<body>
		<nav class="homepage-nav">
			<a href="../logget_nettsteder/index_logged.html" class="nav-name">Rakhman Trafikkskole AS</a>
			<div class="nav-links">
				<li><a href="../logget_nettsteder/kontaktoss_logged.php">Kontakt Oss</a></li>
				<li><a href="../logget_nettsteder/ansatte_logged.html">Ansatte</a></li>
				<li><a href="../logget_nettsteder/registrer_logged.php">Registrer Deg</a></li>
				<li><a href="../logget_nettsteder/priser_logged.php">Priser</a></li>
				<li><a href="../logget_nettsteder/omoss_logged.html">Om Oss</a></li>
			</div>
			<div class="loggedin_section">
				<p>Du er logget inn</p>
				<a href="../index.html">Logg ut</a>
			</div>
		</nav>
		<header>
			<h1>Logg inn</h1>
			<section class="login-section">
				<form action="" method="POST">
					<div class="login-input email">
						<label for="email">E-post</label>
						<input type="text" id="email" name="email" required />
					</div>
					<div class="login-input password">
						<label for="password">Passord</label>
						<input type="password" id="password" name="password" required />
					</div>

					<div class="section-buttons">
						<button type="submit">Logg inn</button><a href="../nettsteder/glemtpassord.html">Glemt passord?</a>
					</div>
				</form>
			</section>
		</header>
	</body>
</html>
