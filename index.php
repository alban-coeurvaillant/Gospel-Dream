<?php
$PAGE_NAME = "home";
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <title>Histoire du Gospel » Gospel Dream</title>
    <meta name="description" content="">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    <script src="js/bjqs-1.3.min.js"></script>

</head>
<body>

<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
    </header>
    <section class="o-banner-section is--wrapped">
        <h1>Bienvenue</h1>
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
        <aside class="sidebar">
            <?php include("views/aside.php"); ?>
        </aside>
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
