<?php
require 'constants/config.php';
require 'constants/check-login.php';
require 'constants/fetch-ad-info.php';

	if ($logged == "1") {
	   if ($myrole == "admin" || $myrole == "user")  {

	   	$preview_allowed = "YES";

	   }else{

	   	if ($myid == $authid) {

	   		$preview_allowed = "YES";

	   	}else{

	   		$preview_allowed = "NO";
	   	}

       

	   }

	}else{

		if ($adstatus == "active") {

			$preview_allowed = "YES";

		}else{

			$preview_allowed = "NO";

		}

	

	}




?>

<!DOCTYPE html>
<html lang="fr">

<head>

<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<title><?php echo $site_title; ?> - <?php echo $title; ?></title>
<?php
if ($preview_allowed == "YES") {

      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[1];

	?>

	<meta property="og:image" content="http://<?php echo $installation_path; ?>/<?php echo $firstFile; ?>" />
    <meta property="og:image:secure_url" content="https://<?php echo $installation_path; ?>/<?php echo $firstFile; ?>" />
    <meta property="og:image:type" content="image/jpeg" />
    <meta property="og:image:width" content="500" />
    <meta property="og:image:height" content="100" />
    <meta property="og:image:alt" content="<?php echo $title; ?>" />
    <meta property="og:description" content="<?php echo $short_des; ?>" />

    <?php

}

?>

<link rel="stylesheet" type="text/css" href="../assets/css/bootstrap.min.css">

<link rel="stylesheet" type="text/css" href="../assets/fonts/line-icons.css">

<link rel="stylesheet" type="text/css" href="../assets/css/slicknav.css">

<link rel="stylesheet" type="text/css" href="../assets/css/color-switcher.css">

<link rel="stylesheet" type="text/css" href="../assets/css/animate.css">

<link rel="stylesheet" type="text/css" href="../assets/css/owl.carousel.css">

<link rel="stylesheet" type="text/css" href="../assets/css/main.css">

<link rel="stylesheet" type="text/css" href="../assets/css/responsive.css">
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
		<a href="../<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> Mon compte</a> |
       <a href="../logout" class="header-top-button"><i class="lni-enter"></i> Se déconnecter</a>
       <?php

	}else{

		?>
		<a href="../login" class="header-top-button"><i class="lni-lock"></i> Se connecter</a> |
       <a href="../register" class="header-top-button"><i class="lni-pencil"></i> Créer un compte</a>
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
<a href="./" id="site_logo"  class="navbar-brand"><?php echo $site_title; ?></a>
</div>
<div class="collapse navbar-collapse" id="main-navbar">
<ul class="navbar-nav mr-auto w-100 justify-content-center">
<li class="nav-item">
<a class="nav-link" href="../">
Accueil
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
Contact
</a>
</li>
<li class="nav-item">
<a class="nav-link" href="../about">
À propos
</a>
</li>

</ul>
<div class="post-btn">
    <?php
	if ($logged == "1") {
		print '<a class="btn btn-common" href="../'.$myrole.'/upload"><i class="lni-pencil-alt"></i> + Donner un objet</a>';

		}else{

		print '<a class="btn btn-common" href="../login"><i class="lni-lock"></i> + Donner un objet</a>';

		}

      ?>

</div>
</div>
</div>

<ul class="mobile-menu">
	<li><a class="active" href="../">Accueil</a>
	<li><a href="../listings">Objets déposés</a>
	<li><a  href="../faq">FAQ</a>
	<li><a href="../contact">Contact</a>
	<li><a class="about" href="../about">À propos</a>
		<?php
	if ($logged == "1") {
	?>
	<li><a href="../<?php echo $myrole ; ?>" class="header-top-button"><i class="lni-user"></i> Mon compte</a>
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


<div class="page-header" style="background: url(../assets/img/banner1.jpg);">
<div class="container">
<div class="row">
<div class="col-md-12">
<div class="breadcrumb-wrapper">
<h2 class="product-title"><?php echo $title; ?></h2>
<ol class="breadcrumb">
<li><a href="../">Accueil /</a></li>
<li style="color:white;" class="current"><?php echo $ad_id; ?></li>
</ol>
</div>
</div>
</div>
</div>
</div>

<?php
if ($not_found == "YES") {

	require 'constants/404.php';

}else{

if ($preview_allowed == "YES") {

	?>

	<div class="section-padding">
<div class="container">

<div class="product-info row">


			<div class="col-lg-8 col-md-12 col-xs-12">
			<div class="ads-details-wrapper">
				<style type="text/css"> 
					.img-fluid2{
						height: 450px;
						float: center;
				}
					.img-detail2{
					float: center;	
				}
					
			</style>
			<div id="owl-demo" class="owl-carousel owl-theme">
				<?php
			$dir = 'uploads/ads/'.$ad_id.'/*.png';

			$fileList = glob($dir);

			foreach($fileList as $filename){
			print '
			<div class="item">
			<div class="">

			<a href="../'.$filename.'"><img class="img-fluid2 img-detail2" width="600" height="400" src="../'.$filename.'" alt="" ></a>



			

			</div>
			</div>

			';


			}


			?>

			</div>
			</div>
							<div class="details-box">
								<div class="ads-details-info">
										<h2><?php echo $title; ?></h2>
									<div class="details-meta">
										<span><a><i class="lni-alarm-clock"></i> <?php echo $post_date; ?></a></span>
										<span><a><i class="lni-map-marker"></i> <?php echo $city; ?></a></span>
										<span><a><i class="lni-files"></i> <?php echo $ad_id; ?></a></span>
										
									
									</div>
									<style type="text/css"> .textarea2 {
    															padding: 10px;
    															line-height: 1.5;
    															border-radius: 5px;
   																 border: white  ;
   																box-shadow: white ;}</style>
									<textarea style="resize: none;"readonly id="story" class ="textarea2"  name="story" rows="8" cols="88" ><?php echo $short_des; ?>


									</textarea>
									

									



								</div>


							<div class="tag-bottom">
							<div class="float-left">
							<ul class="advertisement">
							<li>
							<p><strong><i class="lni-folder"></i> Catégorie :</strong> <a><?php echo $category; ?></a></p>
							</li>
							<li>
							<p><strong><i class="lni-archive"></i> Condition :</strong> <?php echo $adcond; ?></p>
							</li>
							
							</ul>
							</div>
							<div class="float-right">
							<div class="share">
							<div class="social-link">
							<a class="facebook" data-toggle="tooltip" data-placement="top" title="Share on facebook" href="<?php echo $fbshare; ?>"><i class="lni-facebook-filled"></i></a>
							<a class="twitter" data-toggle="tooltip" data-placement="top" title="Share on twitter" href="<?php echo $twshare; ?>"><i class="lni-twitter-filled"></i></a>
							<a class="google" data-toggle="tooltip" data-placement="top" title="Share on google plus" href="<?php echo $gpshare; ?>"><i class="lni-google-plus"></i></a>
							</div>
							</div>
							</div>
							</div>
							</div>
				</div>
<div class="col-lg-4 col-md-6 col-xs-12">

<aside class="details-sidebar">
<div class="widget">
<h4 class="widget-title">Annonce publiée par</h4>
<div class="agent-inner">
<div class="agent-title">
<div class="agent-photo">
<a href="#">
	<?php 
	if ($avatar == null) {

		print '<img class="user_avatar" src="../assets/img/blank_avatar.png" alt="">';

	}else{
		print '<img class="user_avatar" src="../uploads/avatar/'.$avatar.'" alt="">';

	}

	?>
</div>
<div class="agent-details">
<h3><a href="#"><?php echo $author; ?> <?php if ($verified == "YES") { print '<span class="lni-check-mark-circle"></span>'; } ?></a></h3>
<span><i class="lni-envelope"></i><?php echo $email; ?></span>
</div>
</div>
<?php
if (isset($_SESSION['reply'])) {

if ($_SESSION['reply'] == "012") {
	print "<strong>Votre message n'a pas été envoyé</strong>";
}

if ($_SESSION['reply'] == "011") {
	print '<strong>Votre message a été envoyé</strong>';
}

unset($_SESSION['reply']);

}else{

}

?>
<form action="../app/send-ad-message.php" method="POST" autocomplete="OFF">
<input type="hidden" name="mailto" value="<?php echo $email; ?>">
<input type="hidden" name="ref" value="<?php echo $title; ?>">
<input type="hidden" name="adid" value="<?php echo $ad_id; ?>">
<input type="email" name="email" required class="form-control" placeholder="Votre E-mail">
<input type="text" name="phone" required class="form-control" placeholder="Votre Téléphone">
<textarea style="resize: none;" class="form-control" rows="6" name="message" required placeholder="Tapez votre message..." ></textarea>
<button class="btn btn-common fullwidth mt-4">Envoyer le message</button>
</form>
</div>
</div>

<div class="widget">
<h4 class="widget-title">Plus d'annonces de donateur</h4>
<ul class="posts-list">

	<?php
	try {
    $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

	
$stmt = $conn->prepare("SELECT * FROM tbl_ads WHERE author = :author AND ad_id != :adid AND status = 'active' order by rand() LIMIT 6");
$stmt->bindParam(':author', $authid);
$stmt->bindParam(':adid', $ad_id);
$stmt->execute();
$result = $stmt->fetchAll();

    foreach($result as $row)
    {
      $ad_id = $row['ad_id'];
      $directory = "uploads/ads/$ad_id/";
      $files = scandir ($directory);
      $firstFile = $directory . $files[2];

    	?>
    	<li>
<div class="widget-thumb">
<a href="../ad/<?php echo $row['ad_id']; ?>"><img class="more-ads" src="../<?php echo $firstFile; ?>" alt="" /></a>
</div>
<div class="widget-content">
<h4 class="limit-text"><a href="../ad/<?php echo $row['ad_id']; ?>"><?php echo $row['title']; ?></a></h4>
<div class="meta-tag">
<span>
<a><i class="lni-map-marker"></i> <?php echo $row['city']; ?></a>
</span>

</div>

</div>
<div class="clearfix"></div>
</li>

<?php
		

	}
					  
	}catch(PDOException $e)
    {
    echo "Connection failed: " . $e->getMessage();
    }


    ?>

</ul>
</div>
</aside>

</div>
</div>

</div>
</div>







	<?php

}else{

	?>
<section class="subscribes section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="subscribes-inner">
<div class="icon">
<i class="lni-pointer"></i>
</div>

	     <div class="alert alert-danger closeable">
          <h3>Cette annonce n'est pas disponible pour le moment</h3>
          <p style="margin-left:30px;">L'annonce <strong><?php echo $title; ?></strong> attend l'approbation de l'administrateur</p>
            <a class="close" href="#"></a>
        </div>


</div>
</div>

</div>
</div>
</section>



	<?php

}

}

?>




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
<li><a href="listings">- Objets déposés</a></li>
<li><a href="faq">- FAQ's</a></li>
<li><a href="contact">- Contact</a></li>
<li><a href="about">- À propos</a></li>
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
</body>

</html>