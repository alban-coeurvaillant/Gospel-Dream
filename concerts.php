<?php
$PAGE_NAME = "concerts";
?>
<!DOCTYPE html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta charset="UTF-8">
<title>Histoire du Gospel » Gospel Dream</title>
<meta name="description" content="">
<link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
</head>
<body>
<div class="l-main-page">
<header>
  <?php include("views/header.php"); ?>
    <section class="o-banner-section">
<h1>Concerts et reservations</h1>
</section>
</header>
    <section class="l-main is--wrapped is--white">
        <div class=" main__content">
            <div class="content__article">
                <?php include("views/concerts.php"); ?>
            </div>
  </div>
  <aside class="sidebar">
    <?php include("views/aside.php"); ?>
  </aside>
</section>
 <?php include("views/footer.php"); ?>
</div>
</body>
</html>