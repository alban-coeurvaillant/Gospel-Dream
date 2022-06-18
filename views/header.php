<?php
$SITE_TITLE ="Gospel Dream";
$SITE_BASELINE ="Le gospel dans toute sa diversité";
?>



<div class="o-header is--wrapped ">
    <div class="m-header has--padding">
        <h1 class="h1"><a href="index.php" id="logo" class="h1"><?php echo $SITE_TITLE ?></a></h1>
        <h2 class="h2" id="headline"><?php echo $SITE_BASELINE ?></h2>
    </div>
    <div class="m-langage-switcher has--padding">
        <div class="lang-fr">fr</div>
        <div class="lang-en">en</div>
    </div>
    <a href="javascript:void(0)" class="icon" id="btnToggle" onclick="openMenuMobile()">
        <span class="bars-1"></span>
        <span class="bars-2"></span>
        <span class="bars-3"></span>
    </a>
</div>

    <nav id="myLinks">
        <a href="index.php" class="<?php if ($PAGE_NAME == "home") { echo 'current'; }?>" >Notre chorale</a>
        <a href="history.php" class="<?php if ($PAGE_NAME == "history") { echo 'current'; }?>">L'histoire du gospel</a>
        <a href="concerts.php" class="<?php if ($PAGE_NAME == "concerts") { echo 'current'; }?>">Concerts et réservations</a>
        <a href="gallery.php" class="<?php if ($PAGE_NAME == "gallery") { echo 'current'; }?>">Galerie photo</a>
        <a href="press.php" class="<?php if ($PAGE_NAME == "press") { echo 'current'; }?>">Presse</a>
        <a href="discography.php" class="<?php if ($PAGE_NAME == "discography") { echo 'current'; }?>">Discographie</a>
        <a href="contacts.php" class="<?php if ($PAGE_NAME == "contact") { echo 'current'; }?>">Contacts</a>
    </nav>





