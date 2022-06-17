<?php
$PAGE_NAME = "concerts";
?>
<?php include("head.php"); ?>
<div class="l-main-page">
<header class="">
  <?php include("views/header.php"); ?>
    <section class="o-banner-section is--wrapped ">
        <h2 class="h2">Concerts et reservations</h2>
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
