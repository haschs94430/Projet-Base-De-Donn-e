<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des VIP</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des VIP</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from vip");

foreach($results as $ligne){
	echo ' '.$ligne['id_vip'].' . '.$ligne['nom_vip'].' '.$ligne['prenom_vip'].' '.' qui est de sexe '.$ligne['sexe_vip'].' '.' et de nationalite '.$ligne['nationalite_vip'].'<br/>';
}
?>
<h1>Tableau de la table VIP</h1>
<table>
	<thead>
		<th>id_vip</th><th>nom_vip</th><th>prenom_vip</th><th>sexe_vip</th><th>nationalite_vip</th><th>date_deces_vip</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from vip");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['id_vip']."</th>";
						echo "<td>".$ligne['nom_vip']."</td>";
						echo "<td>".$ligne['prenom_vip']."</td>";
						echo "<td>".$ligne['sexe_vip']."</td>";
						echo "<td>".$ligne['nationalite_vip']."</td>";
						echo "<td>".$ligne['date_deces_vip']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
