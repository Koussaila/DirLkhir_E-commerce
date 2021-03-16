<?php
require '../constants/config.php';
require '../constants/check-login.php';

if (isset($_GET['node'])) {
  require 'constants/fetch-add-info.php';

}else{
    header("location:../");
}

if ($key == "1") {

}else{
    header("location:../");
}

if ($logged == "1") {
	   if ($myrole == "user") {

	   }else{

	   	header("location:../");

	   }

	}else{

		header("location:../");

	}


?>

<!DOCTYPE html>
<html lang="en">


<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - Modifier l'annonce <?php echo $title; ?></title>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
<link rel="stylesheet" type="text/css" href="../assets/css/summernote.css">
<link rel="icon" href="../assets/icon/favicon.ico">
</head>
<body>

<header id="header-wrap">

<div class="top-bar">
<div class="container">
<div class="row">
<div class="col-lg-7 col-md-5 col-xs-12">



</div>
<div class="col-lg-5 col-md-7 col-xs-12">

<div class="header-top-right float-right">
<?php
  if ($logged == "1") {
    ?>
    <a href="./" class="header-top-button"><i class="lni-user"></i> Mon compte</a> |
       <a href="../logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter </a>
       <?php

  }else{

    ?>
    <a href="../login" class="header-top-button"><i class="lni-lock"></i> Se connecter </a> |
       <a href="../register" class="header-top-button"><i class="lni-pencil"></i> S'inscrire </a>
   <?php

	}

	?>

</div>
</div>
</div>
</div>
</div>


<nav class="navbar navbar-expand-lg bg-white fixed-top scrolling-navbar">
<div class="container">

<div class="navbar-header">
<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#main-navbar" aria-controls="main-navbar" aria-expanded="false" aria-label="Toggle navigation">
<span class="navbar-toggler-icon"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
<span class="lni-menu"></span>
</button>
<a href="../" id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="../">
Acceuil 
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../listings">
Objets déposés
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../faq">
FAQ
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../contact">
Nous contacter
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about">
À propos de nous
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="upload"><i class="lni-pencil-alt"></i> Post an Ad</a>';

		}else{

		print '<a class="btn btn-common" href="login"><i class="lni-lock"></i> Login to Post</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
  <li><a class="active" href="./">Accueil</a>
  <li><a href="../listings">Objets déposés</a>
  <li><a  href="../faq">FAQ</a>
  <li><a href="../contact">Contact</a>
  <li><a class="about" href="../about">À propos</a>
    <?php
  if ($logged == "1") {
  ?>
  <li><a href="./" class="header-top-button"><i class="lni-user"></i> Mon compte</a>
    <li><a href="../logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter</a>
      <?php
  }else{
    ?>
  <li><a href="../login" class="header-top-button"><i class="lni-lock"></i> Se connecter</a>
    <li><a href="../register" class="header-top-button"><i class="lni-pencil"></i> Créer un compte</a>
   <?php
  }?>
</ul>

</nav>

</header>

<div class="page-header" >
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title">Modifier l'annonce <?php echo $title; ?></h2>
<ol class="breadcrumb">
<li><a href="../">Acceuil/</a></li>
<li class="current" style="color:white">Modifier l'annonce  <?php echo $title; ?></li>
</ol>
</div>
</div>
</div>
</div>
</div>


<div id="content" class="section-padding">
<div class="container">
<div class="row">
<div class="col-sm-12 col-md-4 col-lg-3 page-sidebar">
<aside>
<div class="sidebar-box">
<div class="user">
<figure>
<a >
	<?php 
	if ($myavatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$myavatar.'" alt="">';

	}

	?>
	
</a>
</figure>
<div class="usercontent">
<h3>@<?php echo $myusername; ?>
	<?php if ($accver == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?>
</h3>
<h4>ID: <?php echo $myid; ?></h4>
</div>
</div>
<nav class="navdashboard">
<ul>
<li>
<a  href="./">
<i class="lni-user"></i>
<span>Mon compte</span>
</a>
</li>

<li>
<a class="active" href="myads">
<i class="lni-layers"></i>
<span>Mes annonces</span>
</a>
</li>
<li>
<a href="my-active-ads">
<i class="lni-cloud-check"></i>
<span>Annonces actuelles </span>
</a>
</li>
<li>
<a href="my-pending-ads">
<i class="lni-cloud-upload"></i>
<span>Annonces en attente</span>
</a>
</li>
<li>
<a href="my-featured-ads">
<i class="lni-star"></i>
<span>Annonces en vedette</span>
</a>
</li>
<li>
<a href="upload">
<i class="lni-upload"></i>
<span>Ajouter une annonce</span>
</a>
</li>
<li>
<a href="../logout">
<i class="lni-enter"></i>
<span>Se déconnecter</span>
</a>
</li>
</ul>
</nav>
</div>

</aside>
</div>
<div class="col-sm-12 col-md-12 col-lg-9">
<div class="row page-content">
<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
<div class="inner-box">
<div class="dashboard-box">
<h2 class="dashbord-title">Modifier l'annonce <?php echo $title; ?></h2>
</div>
<div class="dashboard-wrapper">
  <form action="app/update-ad.php" method="POST" autocomplete="off" onsubmit="var text = document.getElementById('minle').value; if(text.length < 1) { alert('La description doit contenir au moin un seul caractere'); return false; } return true;">
    <?php require 'constants/check_reply.php'; ?>
<div class="form-group mb-3">
<label class="control-label">Titre</label>
<input value="<?php echo $title; ?>" class="form-control input-md" name="title" placeholder="Enter Ad Title" required type="text">
</div>
<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Catégorie</label>
<div class="tg-select form-control">
<select name="category" required>
<option value="" selected disabled>Sélectionnez une catégorie</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  $stmt = $conn->prepare("SELECT * FROM tbl_categories ORDER BY category");
  $stmt->execute();
  $result = $stmt->fetchAll();

    foreach($result as $row)
    {
    print '<option'; if ($category == $row['category']) { print ' selected'; } print ' value="'.$row['category'].'">'.$row['category'].'</option>';
  }
            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Ville</label>
<div class="tg-select form-control">
<select name="city" required>
<option value="" selected disabled>Sélectionnez votre ville</option>
<?php
try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  
  $stmt = $conn->prepare("SELECT * FROM tbl_cities ORDER BY city");
  $stmt->execute();
  $result = $stmt->fetchAll();

    foreach($result as $row)
    {
    print '<option'; if ($city == $row['city']) { print ' selected'; } print ' value="'.$row['city'].'">'.$row['city'].'</option>';
  }
            
  }catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }

    ?>
</select>
</div>
</div>

<div class="form-group mb-3 tg-inputwithicon">
<label class="control-label">Etat de l'article</label>
<div class="tg-select form-control">
<select name="condition" required>
<option value="" selected disabled>Sélectionnez l'état de l'article</option>
<option <?php if ($adcond == "Nouveau") { print ' Sélectionné'; } ?> value="Nouveau">Nouveau</option>
<option <?php if ($adcond == "Déjà utilisé") { print 'Sélectionné'; } ?> value="Déjà utilisé">Déjà utilisé</option>
</select>
</div>
</div>




<div class="form-group mb-3">
<label class="control-label">Marque (Optionnel)</label>
<input value="<?php echo $brand; ?>" class="form-control input-md" name="brand" placeholder="Enter Brand" type="text">
</div>

<div class="form-group mb-3">
<label class="control-label">Description</label>
<textarea maxlength="10000" id="minle" class="form-control input-md" name="shortdesc" required><?php echo $short_desc; ?></textarea>
</div>




<input type="hidden" value="<?php echo $ad_id; ?>" name="ad_id">
<button type="submit" class="btn btn-common fullwidth mt-4">Enregistrer</button>
<a class="btn btn-common fullwidth mt-4" href="ad-images?node=<?php echo $ad_id; ?>">Modifier l'image</a>
</form>

</div>
</div>
</div>

</div>
</div>
</div>
</div>
</div>
</div>


<footer>

<section class="footer-Content">
<div class="container">
<div class="row">
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<div class="footer-logo"><h3 class="block-title">À propos</h3></div>
<div class="textwidget">
<p><?php echo $about_site; ?></p>
</div>
<ul class="mt-3 footer-social">
<li><a class="facebook" href="<?php echo $facebook_link; ?>"><i class="lni-facebook-filled"></i></a></li>
<li><a class="twitter" href="<?php echo $twitter_link; ?>"><i class="lni-twitter-filled"></i></a></li>
<li><a class="instaram" href="<?php echo $instagram_link; ?>"><i class="lni-instagram-filled"></i></a></li>
<li><a class="google-plus" href="<?php echo $googleplus_link; ?>"><i class="lni-google-plus"></i></a></li>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Lien rapide</h3>
<ul class="menu">
<li><a href="./">- Accueil</a></li>
<li><a href="/listings">- Objets déposés</a></li>
<li><a href="/faq">- FAQ's</a></li>
<li><a href="/contact">- Contact</a></li>
<li><a href="/about">- À propos</a></li>
<li><a href="https://www.instagram.com/dirlkhir_officiel/">- Développé par</a></li>
    <?php
  if ($logged == "1") {
print '<li><a href="'.$myrole.'">- Mon compte</a></li>
       <li><a href="logout">- Se déconnecter</a></li>';

  }else{
print '<li><a href="login">- Se connecter</a></li>
       <li><a href="register">- Créer un compte</a></li>';

  }

  ?>
</ul>
</div>
</div>
<div class="col-lg-4 col-md-4 col-xs-6 col-mb-12">
<div class="widget">
<h3 class="block-title">Informations de contact</h3>
<ul class="contact-footer">
<li>
<strong><i class="lni-phone"></i></strong><span><?php echo $site_phone; ?></span>
</li>
<li>
<strong><i class="lni-envelope"></i></strong><span><?php echo $site_email; ?></span>
</li>
<li>
<strong><i class="lni-map-marker"></i></strong><span><?php echo $site_address; ?></span>
</li>
</ul>
</div>
</div>
</div>
</div>
</section>


<div id="copyright">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="site-info text-center">
<p>
            
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved <i class="lni-heart-filled" aria-hidden="true"></i> by KoussAdlane 
            </p>

</div>
</div>
</div>
</div>
</div>

</footer>




<a href="#" class="back-to-top">
<i class="lni-chevron-up"></i>
</a>

<div id="preloader">
<div class="loader" id="loader-1"></div>
</div>


<script src="../assets/js/jquery-min.js"></script>
<script src="../assets/js/popper.min.js"></script>
<script src="../assets/js/bootstrap.min.js"></script>
<script src="../assets/js/jquery.counterup.min.js"></script>
<script src="../assets/js/waypoints.min.js"></script>
<script src="../assets/js/wow.js"></script>
<script src="../assets/js/owl.carousel.min.js"></script>
<script src="../assets/js/jquery.slicknav.js"></script>
<script src="../assets/js/main.js"></script>
<script src="../assets/js/form-validator.min.js"></script>
<script src="../assets/js/contact-form-script.min.js"></script>
<script src="../assets/js/summernote.js"></script>
<script src="../assets/js/password-validate.js"></script>

<script>
      $('#summernote').summernote({
          height: 250, // set editor height
          minHeight: null, // set minimum height of editor
          maxHeight: null, // set maximum height of editor
          focus: false // set focus to editable area after initializing summernote
      });
    </script>
</body>

</html>