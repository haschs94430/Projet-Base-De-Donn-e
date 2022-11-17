<?php
	session_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
<head>
<link rel="stylesheet" href="listes.css" />
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Table des articles</title>
<style type="text/css">
</style>
</head>
<body>
	<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<h1>Table des articles</h1>


<?php
include("connexion.inc.php");
$results=$cnx->query("select * from article");

foreach($results as $ligne){
	echo ' '.$ligne['titre_article'].' . '.$ligne['resume_article'].'<br/>';
}
?>
<h1>Tableau de la table Articles</h1>
<table>
	<thead>
		<th>titre_article</th><th>resume_article</th>
		<tbody>
		<?php
			$resultats = $cnx -> query("select * from article");
			foreach($resultats as $ligne){
				echo "<tr>";
						echo "<th>".$ligne['titre_article']."</th>";
						echo "<td>".$ligne['resume_article']."</td>";
				echo "</tr>";
		}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-2.php" class="btn">Cliquer ici pour revenir en arrière</a>
		</tbody>
</table>
</body>
</html>
