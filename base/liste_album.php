<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des albums</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des albums</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from album");

foreach($results as $ligne){
	echo ' '.$ligne['titre_album'].' . en collaboration avec la maison de disque '.$ligne['nom_maison_disque_album'].' sortie le '.$ligne['date_album'].'<br/>';
}
?>
<h1>Tableau de la table Albums</h1>
<table>
	<thead>
		<th>titre_album</th><th>nom_maison_disque_album</th><th>date_album</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from album");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['titre_album']."</th>";
						echo "<td>".$ligne['nom_maison_disque_album']."</td>";
						echo "<td>".$ligne['date_album']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-1.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
