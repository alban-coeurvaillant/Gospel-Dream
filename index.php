<?php
	$page = "accueil";
?>
<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta charset="UTF-8">
	<title>Histoire du Gospel » Gospel Dream</title>
	<meta name="description" content="">
	<link href="css/gospel.css" rel="stylesheet" type="text/css" media="screen">
	<link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,400;0,500;0,700;1,400;1,500&display=swap" rel="stylesheet">
	<script src="http://code.jquery.com/jquery-latest.min.js"></script>
	<script src="js/bjqs-1.3.min.js"></script>
	<link type="text/css" rel="Stylesheet" href="css/bjqs.css"/>
</head>
<body>
<div class="layout">
	<div class="popup">
		<div class="wrapper">
			<div class="image"><img src="images/picto.png" alt=""></div>
			<div class="title">covid-19</div>
			<div class="text">
				<p>
					En cette période particulièrement difficile,<br> soutenez aussi Gospel Dream dans son action </p>
				<a href="https://www.leetchi.com/fr/c/wpj8Q80r" target="_blank">https://www.leetchi.com/fr/c/wpj8Q80r</a>
			</div>
			<div class="excerpt">Prenons soin de nous !</div>
			<a href="javascript:closePopup();" id="close-popup">Continuez sur le site</a>
		</div>
	</div>
</div>
<div id="wrapper">
	<header>
		<?php include("views/header.php"); ?>
		<nav>
			<ul>
				<li id="first_button"><a href="index.php" class="current">Notre chorale</a></li>
				<li><a href="histoire.php">L'histoire du gospel</a></li>
				<li><a href="concerts.php">Concerts et réservations</a></li>
				<li><a href="galerie.php">Galerie photo</a></li>
				<li><a href="presse.php">Presse</a></li>
				<li><a href="discography.php">Discographie</a></li>
				<li><a href="contacts.php">Contacts</a></li>
			</ul>
		</nav>
		<section class="rubrique">
			<h1>Bienvenue</h1>
		</section>
	</header>
	<section class="main">
		<article class="principal">
			<?php include("views/accueil.php"); ?>
		</article>
		<aside class="sidebar">
			<?php include("views/aside.php"); ?>
		</aside>
		<span class="clear"></span></section>
	<?php include("views/footer.php"); ?>
</div>
<script class="secret-source">
    jQuery(document).ready(function ($) {

        $('#my-slideshow').bjqs({
            animtype: 'fade',
            height: 258,
            width: 685,
            animduration: 450, // how fast the animation are
            animspeed: 5000, // the delay between each slide
            responsive: true,
            showcontrols: false, // show next and prev control
            randomstart: true,
            usecaptions: false,
            showmarkers: false // Show individual slide markers
            // show captions for images using the image title tag

        });

    });

    function closePopup() {


        $(".layout").hide();


    }
</script>
</body></html>
