<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des photos</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des photos</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from photo");

foreach($results as $ligne){
	echo ' '.$ligne['num_photo'].' . qui a ete prise par '.$ligne['nom_photographe_photo'].' en collaboration avec agence '.$ligne['nom_agence_photographe'].' prise en '.$ligne['lieu_photo'].' '.$ligne['circonstance_photo'].'<br/>';
}
?>
<h1>Tableau de la table Photos</h1>
<table>
	<thead>
		<th>num_photo</th><th>nom_photographe_photo</th><th>nom_agence_photographe</th><th>lieu_photo</th><th>circonstance_photo</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from photo");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['num_photo']."</th>";
						echo "<td>".$ligne['nom_photographe_photo']."</td>";
						echo "<td>".$ligne['nom_agence_photographe']."</td>";
						echo "<td>".$ligne['lieu_photo']."</td>";
						echo "<td>".$ligne['circonstance_photo']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-2.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
