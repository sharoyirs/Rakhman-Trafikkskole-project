<?php

   require_once('../connection/registrer_connection.php');

   if(isset($_POST['btn']))
   {
      $name = mysqli_real_escape_string($con,$_POST['name']);
      $email = mysqli_real_escape_string($con,$_POST['email']);
      $number = mysqli_real_escape_string($con,$_POST['number']);
      $message = mysqli_real_escape_string($con,$_POST['message']);


    if (empty($name) || empty($password) || empty($email) || empty($number)) 
    {
       
    }
    $sql = "insert into kontaktblad(navn, epost, mobilnummer, melding) values ('$name','$email','$number','$message')";
    $result = mysqli_query($con,$sql);
   }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Kontakt oss</title>
		<link rel="stylesheet" href="../css/kontaktet.css" />
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
			<h1>Kontakt oss</h1>
			<section class="kontakt-informasjon">
				<h1>Meldingen din er nå sendt</h1>
			</section>
		</header>
	</body>
</html>
