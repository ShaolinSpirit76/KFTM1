<?php

//il faut tjrs appeler la base de donnée dans le controller
require '../../model/DataBase.php'; 
require '../../model/User.php';

$User = new User();

$displayUsersResult = $User->displayUser();

