<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des musiciens</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des musiciens</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from musicien");

foreach($results as $ligne){
	echo ' '.$ligne['id_musicien'].' . '.$ligne['nom_musicien'].' '.$ligne['prenom_musicien'].' '.' qui est en collaboration avec la maison de disque '.$ligne['nom_maison_disque_musicien'].'<br/>';
}
?>
<h1>Tableau de la table Musicien</h1>
<table>
	<thead>
		<th>id_musicien</th><th>nom_musicien</th><th>prenom_musicien</th><th>nom_maison_disque_musicien</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from musicien");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['id_musicien']."</th>";
						echo "<td>".$ligne['nom_musicien']."</td>";
						echo "<td>".$ligne['prenom_musicien']."</td>";
						echo "<td>".$ligne['nom_maison_disque_musicien']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index.php" class="btn">Cliquer ici pour revenir en arri�re</a>
		</tbody>
</table>
</body>
</html>
