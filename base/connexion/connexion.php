<?php 
	if(isset($_POST['login'])){
		include("connexion.inc.php");
	 	$req="SELECT * FROM connexion WHERE login='".$_POST['login']."' and password='".md5($_POST['password'])."'";
		if($_POST['login'] == ''  or $_POST['password'] == '' ){
			echo "Merci d'entrer votre ID et votre MP, cliqué <a href=https://etudiant.u-pem.fr/~hmoham03/projet/base/connexion/connexion.php>ici</a> pour réessayer";
		}

		else{
			$result = $cnx->query($req);
			if($result->rowCount() == 0){
				echo "Erreur d'identifiant ou de mot de passe, cliqué <a href=https://etudiant.u-pem.fr/~hmoham03/projet/base/connexion/connexion.php>ici</a> pour réessayer.";
			}
			else{
				session_start();
				$_SESSION['login'] = $_POST['login'];
				$_SESSION['password'] = $_POST['password'];
				echo $_SESSION['login'];
				echo "<br>";
				echo"bienvenue";
				echo "<br><a href=https://etudiant.u-pem.fr/~hmoham03/projet/base/index.php>Page acceuil</a> ";

			}
		}
	}
	else{
		header ('location: form_connexion.html');
	}
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-Strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="fr" lang="fr">
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
		<title>Test de connexion</title>
		<style type="text/css">
			
		</style>
	</head>

	<body>
		
	</body>
</html>
