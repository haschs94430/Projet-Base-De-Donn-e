<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Projets</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/touchTouch.css">
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
             <li><a href="index.php">Metiers VIP</a></li>
             <li class="current"><a href="index-1.php">Projets</a></li>
             <li><a href="index-2.php">Article,Revue,Photo</a></li>
             <li><a href="index-3.php">Insertion</a></li>
             <li><a href="index-4.php">Connexion</a></li>
             <li><a href="index-5.php">Deconnexion</a></li>
           </ul>
          </nav>
      
          <div class="clear"></div>
      </div> </div>
      </div>
    </div>
  </div> 
</header>
<!--=====================
          Content
======================-->
<section class="content gallery">
  <div class="container">
    <div class="row">
      <div class="grid_12">
        <h3>Les differents projets</h3>
      </div>
      <div class="grid_4">
        <div class="box">
          <div class="maxheight">
            <a href="images/big1.jpg" class="gal"><img src="images/page2_img1.jpg" alt=""></a>
            <div class="box_bot"><div class="text1">Projets des acteurs</div> <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_film.php" class="fa fa-chevron-right"></a></div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="box">
          <div class="maxheight">
            <a href="images/big2.jpg" class="gal"><img src="images/page2_img2.jpg" alt=""></a>
            <div class="box_bot"><div class="text1">Projets des chanteurs</div> <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_album.php" class="fa fa-chevron-right"></a></div>
          </div>
        </div>
      </div>
      <div class="grid_4">
        <div class="box">
          <div class="maxheight">
            <a href="images/big3.jpg" class="gal"><img src="images/page2_img3.jpg" alt=""></a>
            <div class="box_bot"><div class="text1">Projets des Musiciens</div> <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_album.php" class="fa fa-chevron-right"></a></div>
          </div>
        </div>
      </div>
      <div class="clear ind__1"></div>
      <div class="grid_4">
        <div class="box">
          <div class="maxheight">
            <a href="images/big4.jpg" class="gal"><img src="images/page2_img4.jpg" alt=""></a>
            <div class="box_bot"><div class="text1">Projets des mannequins</div> <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_defile.php" class="fa fa-chevron-right"></a></div>
          </div>
        </div>      
      </div>
    </div>
  </div>
</section>
<!--==============================
              footer
=================================-->
</div>
<footer id="footer">
  <div class="container">
    <div class="row">
      <div class="grid_12">  
         <div class="socials">
          <a href="#" class="fa fa-twitter"></a>
          <a href="#" class="fa fa-facebook"></a>
          <a href="#" class="fa fa-google-plus"></a>
          <a href="#" class="fa fa-pinterest"></a>
          </div>
      </div>
    </div>
  </div>  
</footer>
</body>
</html>

