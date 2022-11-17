<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table de la requete compliqué</title>
<style type="text/css">
</style>
</head>
<body>
<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table de la requete compliqué</h1>

<?php
include("connexion.inc.php");
$results=$cnx->query("select * from revue natural join composer");

?>

<table>
	<thead>
		<th>num_revue</th><th>date_parution_revue</th><th>titre_article</th><th>num_page_revue</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from revue natural join composer");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['num_revue']."</th>";
						echo "<td>".$ligne['date_parution_revue']."</td>";
						echo "<td>".$ligne['titre_article']."</td>";
						echo "<td>".$ligne['num_page_revue']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-2.php" class="btn">Cliquer ici pour revenir en arri�re</a>
		</tbody>
</table>
</body>
</html>
