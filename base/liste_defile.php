<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des défilés</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des défilés</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from defile");

foreach($results as $ligne){
	echo ' '.$ligne['nom_defile'].' . qui a lieu le'.$ligne['date_defile'].' a '.$ligne['lieu_defile'].' et le nom du couturier est '.$ligne['nom_couturier_defile'].'<br/>';
}
?>
<h1>Tableau de la table Défilés</h1>
<table>
	<thead>
		<th>nom_defile</th><th>date_defile</th><th>lieu_defile</th><th>nom_couturier_defile</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from defile");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['nom_defile']."</th>";
						echo "<td>".$ligne['date_defile']."</td>";
						echo "<td>".$ligne['lieu_defile']."</td>";
						echo "<td>".$ligne['nom_couturier_defile']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-1.php" class="btn">Cliquer ici pour revenir en arri�re</a>
		</tbody>
</table>
</body>
</html>
