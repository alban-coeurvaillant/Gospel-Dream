<?php
$PAGE_NAME = "home";
$PAGE_TITLE = "Ceci est le titre de la page";
$PAGE_DESCRIPTION = "Ceci est la description de la page";
?>

<?php include("head.php"); ?>
<div class="l-main-page">
        <?php include("views/header.php"); ?>
    <section class="o-banner-section is--wrapped">
        <h2 class="h2">Bienvenue</h2>
    </section>
    <section class="l-main is--wrapped is--white">
        <div class=" main__content">
            <div id="my-slideshow" class="is--disabled">
                <ul class="bjqs">
                    <li><img src="images/banner/1.jpg"/></li>
                    <li><img src="images/banner/2.jpg"/></li>
                    <li><img src="images/banner/3.jpg"/></li>
                    <li><img src="images/banner/4.jpg"/></li>
                    <li><img src="images/banner/5.jpg"/></li>
                    <li><img src="images/banner/6.jpg"/></li>
                    <li><img src="images/banner/7.jpg"/></li>
                    <li><img src="images/banner/8.jpg"/></li>
                </ul>
            </div>

            <div class="content__article">
                <h4 class="h4">Une Chorale à taille humaine </h4>
                <p>Créée en 1990 la formation est aujourd’hui la plus active, avec un chant liturgique en plein essor
                    depuis la fin des années 90.
                </p>

                <p>Les uns sont d’origine africaine, les autres viennent des Antilles et des Etats-Unis.</p>
                <p>La chorale Gospel dream est un ensemble mixte et cosmopolite de chanteurs et musiciens noirs qui
                    réunit :
                </p>
                <ul>
                    <li>10 à 12 choristes</li>
                    <li>1 pianiste</li>
                    <li>1 trompettiste.</li>
                </ul>
                <p>Sur scène, la chorale respire la joie de vivre, avec des voix qui parcourent toutes les nuances, des
                    murmures aux vocalises improvisées, leur concert est conçu pour permettre au public de participer,
                    de témoigner et partager un hymne à l’amour.
                </p>
            </div>
        </div>

            <?php include("views/aside.php"); ?>

    </section>
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
        });

    });

    function closePopup() {
        $(".layout").hide();
    }
</script>
</body></html>
