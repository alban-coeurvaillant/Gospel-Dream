<?php
$PAGE_NAME = "contact";
$PAGE_TITLE = "Ceci est le titre de la page";
$PAGE_DESCRIPTION = "Ceci est la description de la page";
?>
<?php include("head.php"); ?>
<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
    </header>
    <section class="o-banner-section is--wrapped">
        <h2 class="h2">Contacts</h2>
    </section>
    <section class="l-main is--wrapped is--white">
        <div class=" main__content is--dark">
            <div class="content__article">
                <p>Vous avez des questions  ou besoin d’informations
                    merci de nous contacter directement : </p>
                <ul class="infos_de_contacts">
                    <li><strong>Par téléphone</strong><br>Tél. : 01 43 14 08 10<br>Port : 06 07 08 55 56</li>
                    <li><strong>Par par mail</strong><br>En nous envoyant un mail directment à l’adresse : manager@gospeldream.com</li>
                </ul>
            </div>
            </div>
            <?php include("views/sidebar.php"); ?>
    <?php include("views/footer.php"); ?>
