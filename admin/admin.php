<?php
require '../controller/adminControllerStart.php';
require '../controller/adminController.php';
include '../view/templates/headHome.php';
include 'navbarAdmin.php';
?>

<div id="adminPage" class="mx-auto text-center">

<h1 class="police text-white">BIENVENUE SUR LA PAGE ADMIN</h1>
<p class="police text-white"><?= $_SESSION['userInfos'][0]['firstName'] ?></p>

<p>Il y a actuellement <?= (count($displayUsers)); ?> membres inscrits sur le site de KFTM.</p>


</div>

<?php
include '../view/templates/footerAdmin.php';

