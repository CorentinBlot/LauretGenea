<?php
    // Récupérer les valeurs du formulaire
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $date_naissance = $_POST['date_naissance'];
    
    // Connexion à la base de données
    $serveur = "localhost";
    $utilisateur = "root";
    $mot_de_passe = "";
    $nom_base_de_donnees = "genealauret";
    
    $connexion = mysqli_connect($serveur, $utilisateur, $mot_de_passe, $nom_base_de_donnees);
    
    // Vérifier la connexion
    if (!$connexion) {
        die("La connexion à la base de données a échoué : " . mysqli_connect_error());
    }
    
    // Construction de la requête SQL en fonction des valeurs du formulaire
    $sql = "SELECT * FROM table_genealogie WHERE";
    
    if (!empty($nom)) {
        $sql .= " nom = '$nom' AND";
    }
    
    if (!empty($prenom)) {
        $sql .= " prenom = '$prenom' AND";
    }
    
    if (!empty($date_naissance)) {
        $sql .= " date_naissance = '$date_naissance' AND";
    }
    
    // Supprimer le dernier "AND" de la requête SQL
    $sql = rtrim($sql, "AND");
    
    // Exécution de la requête SQL
    $resultat = mysqli_query($connexion, $sql);
    
    // Vérifier s'il y a des résultats
    if (mysqli_num_rows($resultat) > 0) {
        // Afficher les résultats
        while ($ligne = mysqli_fetch_assoc($resultat)) {
            echo "Nom : " . $ligne['nom'] . "<br>";
            echo "Prénom : " . $ligne['prenom'] . "<br>";
            echo "Date de naissance : " . $ligne['date_naissance'] . "<br>";
            echo "<br>";
        }
    } else {
        echo "Aucun résultat trouvé.";
    }
    
    // Fermer la connexion à la base de données
    mysqli_close($connexion);
?>
