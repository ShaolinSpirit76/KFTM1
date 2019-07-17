<?php
include '../templates/head.php';
include '../../controller/regex.php';
include '../../controller/login.php';

// Variables dynamiques pour la navbar à partir de pages
$home = '../../index.php';
$schoolDoors = 'schoolDoors.php';
$news = 'news.php';
$kungfu = 'kungfu.php';
$taichi = 'taichi.php';
$sanda = 'sanda.php';
$ourCircle = 'ourCircle.php';
$pictures = 'pictures.php';
$video = 'video.php';
$techniques = 'techniques.php';
$otherSchools = 'otherSchools.php';
$contact = '../form/contact.php';
$shop = 'shop.php';
$connexion = '../form/connexion.php';
$myAccount = '../form/myAccount.php';
$checkCalendar = '../form/checkCalendar.php';

include '../templates/navbar.php';
?>

<p> Page Fil d'actualité en cours de construction. </p>

<?php
// Variables dynamiques pour la navbar à partir à partir de pages
$AssoInfos = '../mentions/AssoInfos.php';
$legalInfos = '../mentions/legalInfos.php';
$CGU = '../mentions/CGU.php';
$RGPD = '../mentions/RGPD.php';

  include '../templates/footer.php';
?>