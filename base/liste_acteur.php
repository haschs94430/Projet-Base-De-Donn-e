<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des acteurs</title>
<style type="text/css">
</style>
</head>
<body>
<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des acteurs</h1>

<?php
include("connexion.inc.php");
$results=$cnx->query("select * from acteur");

foreach($results as $ligne){
	echo ' '.$ligne['id_acteur'].' . '.$ligne['nom_acteur'].' '.$ligne['prenom_acteur'].' '.' qui a fait son 1er film le '.$ligne['date_premier_tournage_acteur'].'<br/>';
}
?>
<h1>Tableau de la table Acteur</h1>
<table>
	<thead>
		<th>id_acteur</th><th>nom_acteur</th><th>prenom_acteur</th><th>date_premier_tournage_acteur</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from acteur");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['id_acteur']."</th>";
						echo "<td>".$ligne['nom_acteur']."</td>";
						echo "<td>".$ligne['prenom_acteur']."</td>";
						echo "<td>".$ligne['date_premier_tournage_acteur']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
