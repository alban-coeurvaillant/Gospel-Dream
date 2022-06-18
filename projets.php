<?php 
$page="projets"; 
?>


<!DOCTYPE html>

<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="UTF-8">
<title>Histoire du Gospel » Gospel Dream</title>
<meta name="description" content="">
<link href="css/gospel.css" rel="stylesheet" type="text/css" media="screen">

</head>

<body>

<div id="wrapper">
<header>

  <?php include("views/header.php"); ?>
  <nav>
 <ul>
  <li><a href="index.php">Notre chorale</a></li>
  <li><a href="histoire.php">L'histoire du gospel</a></li>
  <li><a href="concerts.php">Concerts et réservations</a></li>
  <li><a href="galerie.php">Galerie photo</a></li>
  <li><a href="presse.php">Presse</a></li>
  <li><a href="projets.php" class="current">Projets</a></li>
  <li><a href="discography.php">Discographie</a></li>
  <li><a href="contacts.php">Contacts</a></li>
</ul>
</nav>
<section class="rubrique">
<h1>Nos projets</h1>
</section>
</header>

<section class="main">

  <article class="principal">
  
    <?php include("views/projets.php"); ?>
  </article>
  <aside class="sidebar">
    <?php include("views/sidebar.php"); ?>
  </aside>

<span class="clear"></span>
</section>
 <?php include("views/footer.php"); ?>

</div>
</body>
</html>