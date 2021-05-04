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
		header("location: ../logget_nettsteder/index_logged.html");

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
	</head>
	<body>
		<nav class="homepage-nav">
			<a href="../index.html" class="nav-name">Rakhman Trafikkskole AS</a>
			<div class="nav-links">
				<li><a href="../nettsteder/kontaktoss.php">Kontakt Oss</a></li>
				<li><a href="../nettsteder/ansatte.html">Ansatte</a></li>
				<li><a href="../nettsteder/registrer.php">Registrer Deg</a></li>
				<li><a href="../nettsteder/priser.html">Priser</a></li>
				<li><a href="../nettsteder/omoss.html">Om Oss</a></li>
			</div>
			<a href="../nettsteder/login.php">
				<button type="button">logg inn</button>
			</a>
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
					<p>Feil e-post eller passord</p>
					<div class="section-buttons">
						<button type="submit">Logg inn</button><a href="../nettsteder/glemtpassord.php">Glemt passord?</a>
					</div>
				</form>
			</section>
		</header>
	</body>
</html>
