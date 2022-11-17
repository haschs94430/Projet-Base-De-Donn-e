<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Metiers VIP</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
<link rel="stylesheet" href="css/camera.css">
<link rel="stylesheet" href="css/owl.carousel.css">
<link rel="stylesheet" href="css/stuck.css">
<link rel="stylesheet" href="css/style.css">
</head>

<body class="page1" id="top">
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
             <li class="current"><a href="index.php">Metiers VIP</a></li>
             <li><a href="index-1.php">Projets</a></li>
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
<section class="content">
  <article class="content_bg1 pad__1">
    <div class="container">
      <div class="row">
        <div class="grid_6">
          <div class="block1">
            <div class="count"> 01</div>
            <h3>Acteur</h3>
            <div class="text1">Liste des acteurs </div>
            <p>La liste sera reprếsenté sous forme d'un tabeau
            <br>
            <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_acteur.php" class="btn">More</a>
          </div>
        </div>
        <div class="grid_6">
          <div class="block1">
            <div class="count">02</div>
            <h3>Chanteur</h3>
            <div class="text1">Liste des chanteurs</div>
            La liste sera représenté sous forme d'un tableau
            <br><br>
            <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_chanteur.php" class="btn">More</a>
          </div>
        </div>
      </div>
    </div>
  </article>
  <div class="pad__1">
    <div class="container">
      <div class="row">
        <div class="grid_6">
          <div class="block1">
            <div class="count">03</div>
            <h3>Musicien</h3>
            <div class="text1">Liste des chanteurs </div>
            La liste sera représenté sous forme d'un tableau
            <br><br>
            <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_musicien.php" class="btn">More</a>
          </div>
        </div>
        <div class="grid_6">
          <div class="block1">
            <div class="count">04</div>
            <h3>Mannequin</h3>
            <div class="text1">Liste des mannequins </div>
            La liste sera représenté sous forme d'un tableau
            <br><br>
            <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_mannequin.php" class="btn">More</a>
          </div>
        </div>
        <div class="grid_6">
          <div class="block1">
            <div class="count">05</div>
            <h3>VIP</h3>
            <div class="text1">Liste de tous les VIP </div>
            La liste sera représenté sous forme d'un tableau
            <br><br>
            <a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_vip.php" class="btn">More</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="grid_6 preffix_3 ta__center">
        <h2 class="color1">Personnes ayant participé au projet</h2>
        <div id="owl">
          <div class="item">
            <div class="text2">Mohammad Haseeb</div>L2 Maths/Informatique 
          </div>
          <div class="item">
            <div class="text2">Moine Thomas</div>L2 Maths/Informatique
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

