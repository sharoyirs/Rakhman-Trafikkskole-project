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
      <style>
			.loggedin_section {
				display: flex;
				flex-direction: column;
				padding-right: 20px;
				padding-bottom: 5px;
				width: 139.29px;
			}

			.loggedin_section p {
				font-weight: 700;
				font-size: 1.1em;
			}

			.loggedin_section a {
				text-decoration: none;
				padding: 3px;
				border: none;
				background-color: red;
				text-align: center;
				border-radius: 50px;
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
				<li><a href="../logget_nettsteder/priser_logged.html">Priser</a></li>
				<li><a href="../logget_nettsteder/omoss_logged.html">Om Oss</a></li>
			</div>
			<div class="loggedin_section">
				<p>Du er logget inn</p>
				<a href="../index.html">Logg ut</a>
			</div>
		</nav>
		<header>
			<h1>Kontakt oss</h1>
			<section class="kontakt-informasjon">
				<h1>Meldingen din er nå sendt</h1>
			</section>
		</header>
	</body>
</html>
