<?php
session_start();

require '../controller/adminControllerStart.php';
require '../controller/adminController.php';
include '../view/templates/headHome.php';
?>

<style>
body {
    /* Code pour que l'image reste fixe et responsive */
    margin: 0;
    padding: 0;
    background: url(../../assets/images/theme/knocker-2163643_960_720.jpg) no-repeat center fixed;
    -webkit-background-size: cover;
    /* pour anciens Chrome et Safari */
    background-size: cover;
    /* version standardisée */
  }
</style>



<div id="adminPage">

<h1 id="h1Police" class="text-white">WELCOME SUR LA PAGE ADMIN</h1>
<p class="text-white"><?= $_SESSION['userInfos'][0]['mail'] ?></p>

</div>

<?php
include '../view/templates/footerAdmin.php';
?>
