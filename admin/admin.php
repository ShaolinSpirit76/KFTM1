<?php
require '../controller/adminControllerStart.php';
require '../controller/adminController.php';
include '../view/templates/headHome.php';
?>




<div id="adminPage">

<h1 id="h1Police" class="text-white">WELCOME SUR LA PAGE ADMIN</h1>
<p class="text-white"><?= $_SESSION['userInfos'][0]['mail'] ?></p>


</div>

<?php
include '../view/templates/footerAdmin.php';

