<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Deconnexion</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="" id="top">
  <div class="main">
<!--==============================
              header
=================================-->
<p>Vous etes connecter en tant que <?php echo $_SESSION['login']; ?> <br /> </p>
<header>
<!--==============================
            Stuck menu
=================================-->
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
        </div>
        <div class="clear"></div>
        <h1>
          <a href="index.html">
            <img src="images/logo.png" alt="Logo alt">
          </a>
        </h1>      
      <div class="clear"></div>  
    </div>
   </div> 
  </div>
  <div id="stuck_container">
    <div class="container">
      <div class="row">
        <div class="grid_12">
        <div class="navigation ">
          <nav>
            <ul class="sf-menu">
             <li><a href="index-1.php">Metiers VIP</a></li>
             <li><a href="index-1.php">Projets</a></li>
             <li><a href="index-2.php">Article,Revue,Photo</a></li>
             <li><a href="index-3.php">Insertion</a></li>
             <li><a href="index-4.php">Connexion</a></li>
             <li class="current"><a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/connexion/deconnexion.php">Deconnexion</a></li>
           </ul>
          </nav>
      
          <div class="clear"></div>
      </div> </div>
      </div>
    </div>
  </div> 
</header> 

