<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Formulaire de saisie d'un mariage</title>
		<style type="text/css">
		</style>
	</head>

	<body>
		<p> Insertion </p>
		<?php
			include("connexion.inc.php");	
			$req="INSERT INTO VIP VALUES ('".$_POST['id_vip']."','".$_POST['nom_vip']."','".$_POST['prenom_vip']."','".$_POST['sexe_vip']."','".$_POST['nationalite_vip']."','".$_POST['datedeces_vip']."')";
			if ($_POST['id_vip'] == '' or $_POST['nom_vip'] == '' or $_POST['prenom_vip'] == '' or $_POST['sexe_vip'] == ''){
				echo "Merci de passer par le formulaire formulaire.html.";
			}
			else{
				$results = $cnx->query($req);
				if($results == FALSE){
					echo "Erreur lors de l'ajout de votre VIP.";
				}
				else{
					echo $_POST['id_vip']." ".$_POST['nom_vip']." ".$_POST['prenom_vip']." ".$_POST['sexe_vip']." ".$_POST['nationalite_vip']." ".$_POST['datedeces_vip']." a bien été ajouté.";
				}
			}
		?>
		<a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/index-3.php" class="btn">Cliquer ici pour revenir en arri�re</a>

	</body>
</html>
