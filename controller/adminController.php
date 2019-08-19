<?php
if ($_SESSION['userInfos'][0]['mail'] !== 'patricia.cantrel@gmail.com'){
    header('Location: ../view/templates/error.php');
}


