<?php
$PAGE_NAME = "press";
$PAGE_TITLE = "Ceci est le titre de la page";
$PAGE_DESCRIPTION = "Ceci est la description de la page";
?>
<?php include("head.php"); ?>
<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
        <section class="o-banner-section is--wrapped">
            <div>
                <h2 class="h2">La presse parle de nous…</h2>
            </div>
            <h1>&nbsp;</h1>
        </section>
    </header>

    <section class="l-main is--wrapped ">
        <div class=" main__content">
            <div class="content__article">
                <?php include("views/press.php"); ?></div>
        </div>
            <?php include("views/sidebar.php"); ?>
    <?php include("views/footer.php"); ?>
