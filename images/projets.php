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
<?php echo $page; ?>
  <?php include("views/header.php"); ?>
  <nav>
  <?php include("views/menu.php"); ?>
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

<footer>
  <div id="footerbottom"> <span> © 2014 - Tous droits réservés www.gospeldream.fr </span> </div>
</footer>
</div>
</body>
</html>