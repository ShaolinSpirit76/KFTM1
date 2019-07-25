<?php
session_start();

if(isset($_POST['loginButton'])):
    $mailConnect = htmlspecialchars($_POST['mailConnect']);
    $passwordConnect = htmlspecialchars($_POST['passwordConnect']);

    if(!empty($mailConnect)):
        $connectUser = new User();
        $connectUser->mail = $mailConnect;
        $connectUserResult = $connectUser->connectionUser();
        if($passwordConnect == $connectUserResult->password):
            $_SESSION['student'] = $connectUserResult;
        else:
        endif;
    endif;
endif;
        