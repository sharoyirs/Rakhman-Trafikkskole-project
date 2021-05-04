
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta http-equiv="X-UA-Compatible" content="IE=edge" />
		<meta name="viewport" content="width=device-width, initial-scale=1.0" />
		<title>Kontakt oss</title>
		<link rel="stylesheet" href="../css/kontaktoss.css" />
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
				<form action="./kontaktet.php" method="POST">
					<div class="kontakt-leftside">
						<div class="kontakt-input">
							<label for="name">Fullt navn</label>
							<input
								type="text"
								id="name"
								name="name"
								required
								placeholder="Skriv inn ditt navn"
							/>
						</div>
						<div class="kontakt-input">
							<label for="email">E-post</label>
							<input
								type="email"
								id="email"
								name="email"
								required
								placeholder="Skriv inn din e-postadresse"
							/>
						</div>
						<div class="kontakt-input">
							<label for="number">Telefonnummer</label>
							<input
								type="text"
								id="number"
								name="number"
								required
								maxlength="8"
								placeholder="Skriv inn ditt mobilnummer"
							/>
						</div>
					</div>
					<div class="kontakt-rightside">
						<div class="kontakt-input">
							<label for="melding">Melding</label>
							<textarea
								required
								name="message"
								id="message"
								cols="30"
								rows="7"
							></textarea>
						</div>
					</div>
					<break></break>
					<button type="submit" class="kontakt-buton" name="btn">Send</button>
				</form>
			</section>
		</header>
	</body>
</html>
