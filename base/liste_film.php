<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des films</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des films</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from film");

foreach($results as $ligne){
	echo ' '.$ligne['num_visa_film'].' . et le role jouer est '.$ligne['role_jouer_film'].' dans le film '.$ligne['titre_film'].' '.' qui a fait son 1er film le '.$ligne['date_film'].' realiser par '.$ligne['nom_realisateur_film'].'<br/>';
}
?>
<h1>Tableau de la table Films</h1>
<table>
	<thead>
		<th>num_visa_film</th><th>role_jouer_film</th><th>titre_film</th><th>date_film</th><th>nom_realisateur_film</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from film");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['num_visa_film']."</th>";
						echo "<td>".$ligne['role_jouer_film']."</td>";
						echo "<td>".$ligne['titre_film']."</td>";
						echo "<td>".$ligne['date_film']."</td>";
						echo "<td>".$ligne['nom_realisateur_film']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-1.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
