<?php
if ($_SESSION['userInfos'][0]['mail'] !== 'levray.jm@wanadoo.fr'){
    header('Location: ../view/templates/error.php');
}


