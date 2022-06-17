<?php
$PAGE_NAME = "discography";
?>
<?php include("head.php"); ?>
<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
    </header>
    <section class="o-banner-section is--wrapped ">
        <h2 class="h2">Discographie</h2>
    </section>

    <section class="l-main is--wrapped is--white">
        <div class=" main__content">
            <div class=" main__content is--dark">
                <?php include("views/discography.php"); ?>
            </div>
        </div>
            <?php include("views/sidebar.php"); ?>
    <?php include("views/footer.php"); ?>
