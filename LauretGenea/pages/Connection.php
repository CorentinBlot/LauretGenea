<?php

?>

<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<title>Page de connection</title>
</head>
<body>
	<main>
		<section>
			<form action="Verification.php" method="POST">
				<h1>Connexion</h1>
				
				<label><b>Identifiant</b></label>
				<input type="text" placeholder="Entrer le nom d'utilisateur" name="username" required="">
			
				<label><b>Mot de passe</b></label>
				<input type="password" placeholder="Entrer le mot de passe" name="password" required="">
			
				<input type="submit" id="submit" href="Accueil.html" value="Connexion">
			</form>
		</section>
	</main>
	<footer>
		<p>Copyright © 2023</p>
	</footer>
</body>
</html>
