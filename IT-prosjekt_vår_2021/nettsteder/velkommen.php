<?php

   require_once('../connection/registrer_connection.php');

   if(isset($_POST['btn']))
   {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $password = mysqli_real_escape_string($con,$_POST['password']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $number = mysqli_real_escape_string($con,$_POST['number']);
      $postnumber = mysqli_real_escape_string($con,$_POST['postnumber']);

    if (empty($name) || empty($password) || empty($email) || empty($number) || empty($postnumber))
    {
       echo 'Please fill in the blanks';
    }
    $sql = "insert into logg_inn(navn, passord, epost, nummer, postnummer) values ('$name','$password','$email','$number','$postnumber')";
    $result = mysqli_query($con,$sql);
   }
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Document</title>
		<link rel="stylesheet" href="../css/velkommen.css" />
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
				<li><a href="./kontaktoss.php">Kontakt Oss</a></li>
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
			<img src="../bilder/check_mark.png" alt="check mark">
			<h1>Du er nå Registrert!</h1>
			<p>Du er nå registrert for Rakhman Trafikkskole</p>
			<p>Trykk på knappen for å logge deg inn</p>
			<a href="./login.php">
				<button type="button">Logg inn</button>
			</a>
		</header>
	</body>
</html>
