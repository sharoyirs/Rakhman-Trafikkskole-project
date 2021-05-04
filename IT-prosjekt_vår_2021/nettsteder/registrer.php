
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport"	 content="width=device-width, initial-scale=1.0" />
		<title>Registrering</title>
		<link rel="stylesheet" href="../css/registrer.css" />
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
			<div class="header-text">
				<h1>Reigstrer Deg</h1>
			</div>
			<section class="registration-section">
				<form action="./velkommen.php" method="POST">
					<div class="register-input name">
						<label for="name">Navn</label>
						<input type="text" id="name" name="name" required />
					</div>
					<div class="register-input password">
						<label for="password">Passord</label>
						<input type="password" id="password" name="password" required />
					</div>
					<div class="register-input email">
						<label for="email">E-post</label>
						<input type="text" id="email" name="email" required />
					</div>
					<div class="register-input phonenumber">
						<label for="number">Mobilnummer</label>
						<input type="text" maxlength="8" name="number" id="number" required />
					</div>
					<div class="register-input postnumber">
						<label for="postnumber">Postnummer</label>
						<input type="text" maxlength="4" name="postnumber" id="postnumber" required />
					</div>
					<div class="section-buttons">
						<button type="submit" name="btn">Registrer</button>
						<a href="../nettsteder/login.html">Har du allerede en bruker?</a>
					</div>
				</form>
			</section>
			<img
				src="../bilder/curved_arrow.png"
				class="curved_arrow"
				alt="curved_arrow"
			/>
		</header>
	</body>
</html>
