<?php
$PAGE_NAME = "gallery";
?>
<!DOCTYPE html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta charset="UTF-8">
    <title>Histoire du Gospel » Gospel Dream</title>
    <meta name="description" content="">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <link href="css/lightbox.css" rel="stylesheet" type="text/css" media="screen">
    <script>
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })
    </script>

</head>
<body>
<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
        <section class="o-banner-section is--wrapped">
            <h1>Galerie Photo</h1>
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
