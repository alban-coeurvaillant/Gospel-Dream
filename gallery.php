<?php
$PAGE_NAME = "gallery";
?>
<?php include("head.php"); ?>
<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
        <section class="o-banner-section is--wrapped">
            <h2 class="h2">Galerie Photo</h2>
        </section>
    </header>

    <section class="l-main is--wrapped is--white">

        <div class="main__content">
            <div class=" main__content is--dark">
                <?php include("views/galerie.php"); ?>
            </div>
        </div>
            <?php include("views/sidebar.php"); ?>
    <?php include("views/footer.php"); ?>
