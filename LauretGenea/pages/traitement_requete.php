<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/Logo_Arbre.png">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<title>Résultat du formulaire</title>
</head>


<body>
	<header>
		<img src="../img/Logo_Arbre.png" alt="">
		<center><h1>GénéaLauret</h1></center>
		<div class="menu">
				<ul>
					<li><a href="Accueil.php">Accueil</a></li>
					<li><a href="Genea.php">Généalogie familiale</a></li>
					<li><a href="Releves.php">Relevés généalogiques</a></li>
					<li><a href="Contacts.php">Contacts</a></li>
				</ul>
			
		</div>
		
		
	</header>
	<div class="container">
		<div class="contenu">
            <?php
            // Connexion à la base de données
            $servername = "localhost";
            $username = "root";
            $password = "";
            $dbname = "genealauret";

            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
                die("Échec de la connexion à la base de données : " . $conn->connect_error);
            }

            // Récupérer les valeurs du formulaire
            $commune = $_POST['Commune'];
            $nomRecherche = $_POST['NomdeRecherche'];
            $prenomRecherche = $_POST['PrenomdeRecherche'];
            $perePrenomRecherche = $_POST['PerePrenomRecherche'];
            $mereNomRecherche = $_POST['MereNomRecherche'];
            $merePrenomRecherche = $_POST['MerePrenomRecherche'];
            $situation2 = $_POST['Situation2'];
            $dateClassement = $_POST['DateClassement'];

            // Construire la requête SQL
            $sql = "SELECT * FROM informations WHERE 1=1";
            if ($commune != "") {
                $sql .= " AND commune = $commune";
            }
            if ($nomRecherche != "") {
                $sql .= " AND nom = '$nomRecherche'";
            }
            if ($prenomRecherche != "") {
                $sql .= " AND prenom = '$prenomRecherche'";
            }
            if ($perePrenomRecherche != "") {
                $sql .= " AND pere_prenom = '$perePrenomRecherche'";
            }
            if ($mereNomRecherche != "") {
                $sql .= " AND mere_nom = '$mereNomRecherche'";
            }
            if ($merePrenomRecherche != "") {
                $sql .= " AND mere_prenom = '$merePrenomRecherche'";
            }
            if ($situation2 != "") {
                $sql .= " AND nom_conjoint = '$situation2'";
            }
            if ($dateClassement != "") {
                $sql .= " AND date_classement = '$dateClassement'";
            }

            // Exécuter la requête SQL
            $result = $conn->query($sql);

            // Vérifier si des résultats ont été trouvés
            if ($result->num_rows > 0) {
                // Afficher les résultats
                echo "<h2>Résultats de recherche</h2><br><br>";
                while ($row = $result->fetch_assoc()) {
                    echo "<p>Commune : " . $row['commune'] . "</p>";
                    echo "<p>Nom de recherche : " . $row['nom'] . "</p>";
                    echo "<p>Prénom de recherche : " . $row['prenom'] . "</p>";
                    echo "<p>Prénom du père : " . $row['pere_prenom'] . "</p>";
                    echo "<p>Nom de la mère : " . $row['mere_nom'] . "</p>";
                    echo "<p>Prénom de la mère : " . $row['mere_prenom'] . "</p>";
                    echo "<p>Nom du conjoint : " . $row['nom_conjoint'] . "</p>";
                    echo "<p>Date de classement : " . $row['date_classement'] . "</p>";
                    echo "<br>- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -<br>";
                }
            } else {
                echo "Aucun résultat trouvé.";
            }

            // Fermer
            ?>
            <br><br><br>
            <br><br><br>
            <br><br><br>
            <br><br><br>
        </div>
    </div>
    



</body>
<footer>
		<div class="footer2">
			<img src="../img/Logo_Arbre.png" alt="">
			<div>
				<h1>GénéaLauret</h1>
				
			</div>	
			<br>
			<div>
				<h2>
					<a href="pages/MentionsLégales.php">- Mentions légales -</a>
				</h2>
			</div>
			<br>
			<div>
				<h2 style="padding-top: 45%;">
					<a href="pages/Contact.php">- Contacts -</a>
				</h2>
			</div>
		</div>
	</footer>
</html>