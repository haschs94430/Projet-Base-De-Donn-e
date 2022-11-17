<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des mannequins</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des mannequins</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from mannequin");

foreach($results as $ligne){
	echo ' '.$ligne['id_mannequin'].' . '.$ligne['nom_mannequin'].' '.$ligne['prenom_mannequin'].' '.' qui mesure '.$ligne['taille_mannequin'].' '.' cm et qui est en collaboration avec agence '.$ligne['nom_agence_mannequin'].'<br/>';
}
?>
<h1>Tableau de la table Mannequin</h1>
<table>
	<thead>
		<th>id_mannequin</th><th>nom_mannequin</th><th>prenom_mannequin</th><th>taille_mannequin</th><th>nom_agence_mannequin</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from mannequin");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['id_mannequin']."</th>";
						echo "<td>".$ligne['nom_mannequin']."</td>";
						echo "<td>".$ligne['prenom_mannequin']."</td>";
						echo "<td>".$ligne['taille_mannequin']."</td>";
						echo "<td>".$ligne['nom_agence_mannequin']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
