<?php
$PAGE_NAME = "home";
$PAGE_TITLE = "Ceci est le titre de la page";
$PAGE_DESCRIPTION = "Ceci est la description de la page";
?>

<!DOCTYPE html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Gospel Dream :une chorale qui vous invitent à découvrir le Gospel </title>
    <meta name="description" content="<?php echo $PAGE_TITLE ?>">
    <link href="css/style.css" rel="stylesheet" type="text/css" media="screen">
    <script>
        function openMenuMobile(){
            let x = document.getElementById("myLinks");
            let btnToggle = document.getElementById("btnToggle");
            btnToggle.classList.toggle("is--active");

            if (x.style.display ==="block"){
                x.style.display = "none";

            } else {
                x.style.display = "block"
            }
        }
    </script>

    <style>

        .debug-card{
            position: absolute;
            outline: saddlebrown;
            top: 0;
            background: #00f;
            padding: 1rem;
            color: #ffa400;
            left: 0;
            right: 0;
        }
    </style>
</head>
<body>

<div class="debug-card" style="display: none">



    <ul>
        <li>
            <?php
            echo $PAGE_NAME
            ?>
        </li>
        <li>
            <?php
            echo $PAGE_TITLE
            ?>
        </li>  <li>
            <?php
            echo $PAGE_DESCRIPTION
            ?>
        </li>
    </ul>


</div>
<div class="l-main-page">
    <header>
        <?php include("views/header.php"); ?>
    </header>
    <section class="o-banner-section ">
        <h2 class="h2">Bienvenue</h2>
    </section>
    <section class="l-main  ">
        <div class=" main__content ">
            <?php include("views/home.php")?>
        </div>
        <aside class="o-sidebar ">
            <?php include("views/sidebar.php"); ?>
        </aside>
    </section>

    <footer class=" d-flex items-center">
        <?php include("views/footer.php"); ?>
    </footer>
</div>
<script src="js/init.js"></script>
</body>
</html>
