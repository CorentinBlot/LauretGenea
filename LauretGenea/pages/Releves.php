<!DOCTYPE html>
<html lang="fr">
<head>
<?php
	//Connection a une BDD
	$mysqlConnection = new PDO(
	    'mysql:host=localhost;dbname=Genealauret;charset=utf8',
	    'root',//nom d'utilisateur phpmydamin
	    ''//MDP d'utilisateur phpmyadmin
	);
	?>
	<meta charset="UTF-8">
	<link rel="icon" type="image/png" sizes="16x16" href="../img/Logo_Arbre.png">
	<link rel="stylesheet" href="../css/style.css">
	<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap" rel="stylesheet">
	<title>Relevés</title>
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
		<center><h1>Relevés généalogiques</h1>
		<br>
    	<h4>Le site de Généalogie de la Famille Lauret</h4></center>
		<br>
		<p>
		Ce tableau présente des informations sur les actes de naissance, mariage et décès <br>disponibles dans les registres de plusieurs communes en France. Les données sont <br> 
		présentées sous forme de tableaux avec des informations sur les années couvertes et le <br> nombre d'actes disponibles pour chaque type d'événement. Les fichiers Excel sont<br> 
		 également inclus pour chaque commune répertoriée. Les informations les plus récentes <br> datent de 2014 pour la commune de Sévérac le Château, tandis que les autres datent de<br>  2010. Ces données peuvent être utiles pour les personnes effectuant des recherches<br>  généalogiques dans ces régions.
		<br><br><br>
		</p>

		<td>
		<h4>Relevés en Aveyron</h4>		
		<p>sur les communes Lapanouse,Lavernhe, Recoules Prévinquières,<br>
		Sébazac Concourès, Sévérac le Château
		</p>
		<br>

		<!-- Formulaire de recherche sur la BDD -->
		<h4 class="search-heading">Formulaire de recherche sur la BDD<br><br></h4>
		<form botid="0" method="POST" action="traitement_requete.php">
		<input type="hidden" name="recherche" value="  |<  ">
		  <p><font size="6">Compilation </font><font size="5">&nbsp;Recherche</font></p>
		  <p> <font size="2">Le caractère "%" peut remplacer les lettres accentuées ou n'importe quel autre caractère <br>ou groupe de caractères.<br>Si vous pensez que personne est de père inconnu, tapez "inconnu" dans le champprénom du père... </font></p>
			<table border="1" width="90%" style="border-collapse: collapse">
				<tbody><tr>
					<td>&nbsp;Commune</td>
					<td align="center">
					<input type="TEXT" name="Commune" value=""></td>
				</tr>
				<tr>
					<td><b><font size="4">&nbsp;Nom</font></b></td>
					<td align="center">
					<input type="TEXT" name="NomdeRecherche" value=""></td>
					
				</tr>
				<tr>
					<td>&nbsp;Prénom</td>
					<td align="center">
					<input type="TEXT" name="PrenomdeRecherche" value=""></td>
				</tr>
				<tr>
					<td>&nbsp;Prénom du père</td>
					<td align="center">
					<input type="TEXT" name="PerePrenomRecherche" value=""></td>
				</tr>
				<tr>
					<td>&nbsp;Nom de la mère</td>
					<td align="center">
					<input type="TEXT" name="MereNomRecherche" value=""></td>
				</tr>
				<tr>
					<td>&nbsp;Prénom de la mère</td>
					<td align="center">
					<input type="TEXT" name="MerePrenomRecherche" value=""></td>
				</tr>
				<tr>
					<td>&nbsp;Nom du conjoint</td>
					<td align="center">
					<input type="TEXT" name="Situation2" value=""></td>
				</tr>
				<tr>
					<td>&nbsp;Date</td>
					<td align="center">
					<input type="TEXT" name="DateClassement" value=""></td>
				</tr>
			</tbody></table>
			<p>
			<input type="Submit"><input type="Reset"></p>
		</form>
		<br>
		<!-- Formulaire de recherche par type d'acte -->

		<h4 class="search-heading">
		Formulaire de recherche par type d'acte <br></h4>
		<a href="RechercompilNaissances.asp"><span class="search-link">- Naissances -</span></a><br>
		<a href="RechercompilMariages.asp"><span class="search-link">- Mariages -</span></a><br>
		<a href="RecherCompilDeces.asp"><span class="search-link">- Décès -</span></a><br>
		<br>


		<h4 class="search-heading">Téléchargement des relevés en Fichiers Excel <br></h4>
		<!-- tableau 1 -->
		<h5>Lapanouse de Sévérac </h5><p >(mise à jour du 13/03/2010)</p>
		<span class="photos"> <a href="Photos-Actes/Lapanouse/Photos-Registres.html"> Photos de registres absents des CD </a> </span>
			 
		<table class="search-table">
			<tr>
				<th>Type d'acte</th>
				<th>Période</th>
				<th>Nombre d'actes</th>
				<th>Fichier Excel</th>
			</tr>
			<tr>
				<td>Naissances</td>
				<td>1619 / 1912</td>
				<td>8 099</td>
				<td><a href="../fichiers/Lapanouse1619-1912N.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Mariages</td>
				<td>1619 / 1912</td>
				<td>2 232</td>
				<td><a href="../fichiers/Lapanouse1619-1912M.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Décès</td>
				<td>1619 / 1912</td>
				<td>6 521</td>		
				<td><a href="../fichiers/Lapanouse1619-1912D.zip">Fichier Excel</a></td>

			</tr>
		</table>
		<br>
	
		<!-- tableau 2 -->
		<h5>Lavernhe</h5><p>(mise à jour du 13/03/2010)</p>

		<table class="search-table">
		<tr>
			<th>Type d'acte</th>
			<th>Période</th>
			<th>Nombre d'actes</th>
			<th>Fichier Excel</th>
		</tr>
		<tr>
			<td>Naissances</td>
			<td>AN 04 / AN 11</td>
			<td>134</td>
			<td><a href="../fichiers/LavernheAN04-AN11N.zip">Fichier Excel</a></td>
		</tr>
		<tr>
			<td>Naissances</td>
			<td>1823 / 1832</td>
			<td>250</td>
			<td><a href="../fichiers/Lavernhe1823-1832N.zip">Fichier Excel</a></td>
		</tr>
		<tr>
			<td>Mariages</td>
			<td>AN 03 / AN 11</td>
			<td>29</td>
			<td><a href="../fichiers/LavernheAN03-AN11M.zip">Fichier Excel</a></td>
		</tr>
		<tr>
			<td>Mariages</td>
			<td>1823 / 1832</td>
			<td>66</td>
			<td><a href="../fichiers/Lavernhe1823-1832M.zip">Fichier Excel</a></td>
		</tr>
		<tr>
			<td>Décès</td>
			<td>AN 04 / AN 11</td>
			<td>72</td>
			<td><a href="../fichiers/LavernheAN04-AN11D.zip">Fichier Excel</a></td>
		</tr>
		<tr>
			<td>Décès</td>
			<td>1823 / 1832</td>
			<td>187</td>
			<td><a href="../fichiers/Lavernhe1823-1832D.zip">Fichier Excel</a></td>
		</tr>
		</table>
		<br>
		
		<!-- tableau 3 -->
		<h5>Recoules Prévinquières </h5><p>(mise à jour du 13/03/2010)</p>
		<table class="search-table">
			<tr>
				<th>Type d'acte</th>
				<th>Période</th>
				<th>Nombre d'actes</th>
				<th>Fichier Excel</th>
			</tr>
			<tr>
				<td>Naissances</td>
				<td>AN 08</td>
				<td>17</td>
				<td><a href="../fichiers/RecoulesAN08N.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Mariages</td>				
				<td>AN 07</td>
				<td>2</td>
				<td><a href="../fichiers/RecoulesAN07M.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Décès</td>
				<td>AN 08</td>
				<td>10</td>		
				<td><a href="../fichiers/RecoulesAN08D.zip">Fichier Excel</a></td>

			</tr>
		</table>
		<br>
		
		<!-- tableau 4 -->
		<h5>Sébazac Concourès </h5><p>(mise à jour du 13/03/2010)</p>
		<table class="search-table">
			<tr>
				<th>Type d'acte</th>
				<th>Période</th>
				<th>Nombre d'actes</th>
				<th>Fichier Excel</th>
			</tr>
			<tr>
				<td>Naissances</td>
				<td>1619 / 1912</td>
				<td>3 969</td>
				<td><a href="../fichiers/Concoures1637-1902N.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Mariages</td>
				<td>1619 / 1912</td>
				<td>987</td>
				<td><a href="../fichiers/Concoures1652-1902M.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Décès</td>
				<td>1619 / 1912</td>
				<td>2 870</td>		
				<td><a href="../fichiers/Concoures1638-1902D.zip">Fichier Excel</a></td>

			</tr>
		</table>
		<br>
		
		<!-- tableau 5 -->
		<h5>Sévérac le Château </h5><p>(mise à jour du 13/03/2010)</p>
		<table class="search-table">
			<tr>
				<th>Type d'acte</th>
				<th>Période</th>
				<th>Nombre d'actes</th>
				<th>Fichier Excel</th>
			</tr>
			<tr>
				<td>Naissances</td>
				<td>1619 / 1912</td>
				<td>255</td>
				<td><a href="../fichiers/SeveracAN06a10N.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Mariages</td>
				<td>1619 / 1912</td>
				<td>10572</td>
				<td><a href="../fichiers/SeveracAN06a10M.zip">Fichier Excel</a></td>
			</tr>
			<tr>
				<td>Décès</td>
				<td>1619 / 1912</td>
				<td>137</td>		
				<td><a href="../fichiers/severacAN06a10D.zip">Fichier Excel</a></td>
			</tr>
		</table>
		<br>
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
