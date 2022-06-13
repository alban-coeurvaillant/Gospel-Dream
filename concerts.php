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
<header class="">
  <?php include("views/header.php"); ?>
    <section class="o-banner-section is--wrapped ">
<h1>Concerts et reservations</h1>
</section>
</header>
    <section class="l-main is--wrapped is--white">
        <div class=" main__content is--dark">
            <div class="content__article">
                <?php include("views/concerts.php"); ?>
            </div>
  </div>
        <?php include("views/sidebar.php"); ?>
 <?php include("views/footer.php"); ?>
