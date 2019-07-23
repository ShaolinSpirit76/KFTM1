<?php

include '../templates/head.php';
include '../../controller/regex.php';
include '../../controller/login.php';

// Variables dynamiques pour la navbar à partir de form
$home = '../../index.php';
$schoolDoors = '../pages/schoolDoors.php';
$news = '../pages/news.php';
$kungfu = '../pages/kungfu.php';
$taichi = '../pages/taichi.php';
$sanda = '../pages/sanda.php';
$ourCircle = '../pages/ourCircle.php';
$pictures = '../pages/pictures.php';
$video = '../pages/video.php';
$techniques = '../pages/techniques.php';
$otherSchools = '../pages/otherSchools.php';
$contact = 'contact.php';
$shop = '../pages/shop.php';
$connexion = 'connexion.php';
$myAccount = 'myAccount.php';
$checkCalendar = 'checkCalendar.php';

include '../templates/navbar.php';
?>

<!-- Bouton switch on/off -->
<div class="text-center">
<label>Afficher mon profil dans la page "Notre cercle"</label>
<div class="onoffswitch">
        <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
        <label class="onoffswitch-label" for="myonoffswitch">
            <span class="onoffswitch-inner"></span>
            <span class="onoffswitch-switch"></span>
        </label>
    </div>
</div>




<?php
// Variables dynamiques pour la navbar à partir à partir de form
$AssoInfos = '../mentions/AssoInfos.php';
$legalInfos = '../mentions/legalInfos.php';
$CGU = '../mentions/CGU.php';
$RGPD = '../mentions/RGPD.php';

  include '../templates/footer.php';
?>