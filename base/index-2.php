<?php
	session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Article,revue et photo</title>
<meta charset="utf-8">
<meta name = "format-detection" content = "telephone=no" />
<link rel="icon" href="images/favicon.ico">
<link rel="shortcut icon" href="images/favicon.ico" />
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
             <li><a href="index-1.php">Projet</a></li>
             <li class="current"><a href="index-2.php">Article,Revue,Photo</a></li>
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
        <div class="grid_12">
          <h3>Article,revue et photo</h3>
        </div>
        <div class="grid_4">
          <div class="block2">
            <div class="fa fa-file-text-o"></div>
            <div class="text1"><a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_article.php">Liste des articles </a></div>
            Liste des articles sous forme d'un tableau
          </div>
        </div>
        <div class="grid_4">
          <div class="block2">
            <div class="fa fa-file-text-o"></div>
            <div class="text1"><a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_revue.php">Liste des revues </a></div>
            Liste des revues sous forme d'un tableau
          </div>
        </div>
        <div class="grid_4">
          <div class="block2">
            <div class="fa fa-file-text-o"></div>
            <div class="text1"><a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/liste_photo.php">Liste des photos </a></div>
            Liste des photos sous forme d'un tableau
          </div
          <div class="grid_4">
          <div class="block2">
            <div class="fa fa-file-text-o"></div>
            <div class="text1"><a href="https://etudiant.u-pem.fr/~hmoham03/projet/base/requete_compliquer.php">Requete complique </a></div>
            Liste sous forme d'un tableau
          </div>
        </div>
        </div>
        <div class="clear"></div>
      </div>
    </div>
  </article>
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

