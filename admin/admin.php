<?php
require '../controller/adminControllerStart.php';
require '../controller/adminController.php';
include '../view/templates/headHome.php';
include 'navbarAdmin.php';
?>

<div id="adminPage" class="mx-auto text-center">

<h1 class="police text-white">WELCOME SUR LA PAGE ADMIN</h1>
<p class="text-white"><?= $_SESSION['userInfos'][0]['mail'] ?></p>


</div>

<?php
include '../view/templates/footerAdmin.php';

