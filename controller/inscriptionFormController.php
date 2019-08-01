<?php
//il faut tjrs appeler la base de donnée dans le controller
require '../../model/DataBase.php'; 
require '../../model/User.php';




// On crée un tableau error qui s'auto-incrémentera avec la valeur de l'erreur que nous lui assignerons au cas par cas, si la regex n'est pas franchie. Chaque cellule remplie comptera pour 1.
$error = [];
$users = new User();

// On teste les regex si le formulaire est rempli
if (count($_POST) > 0):

    // Déclaration de variables qui prennent les valeurs des $_POST respectives
    $lastName = $_POST['lastName'];
    $firstName = $_POST['firstName'];
    $birthDate = $_POST['birthDate'];
    $picture = $_POST['picture'];

//   $imgFile = $_FILES['picture']['name'];
//   $tmp_dir = $_FILES['picture']['tmp_name'];
//   $imgSize = $_FILES['picture']['size'];

    $mail = $_POST['mail'];
    $phoneNumber = $_POST['phoneNumber'];
    $userLog = $_POST['userLog'];
    $password = $_POST['password'];
    $status = $_POST['status'];
    $studentCourse = $_POST['studentCourse'];
    $teacherCourse = $_POST['teacherCourse'];
    $groupAge = $_POST['groupAge'];
    $studentYear = $_POST['studentYear'];
    $childBelt = $_POST['childBelt'];
    $studentBelt = $_POST['studentBelt'];
    $teacherRank = $_POST['teacherRank'];
    $presentation = $_POST['presentation'];
    // $verification = $_POST['verification'];

    
    $_POST = array_map('strip_tags', $_POST); // Ligne à mettre absolument pour la sécurité : interdit l'injection de script (balises non autorisées)

    if ( !preg_match ($regexName, $_POST['lastName'] ) ):
        $error['errorLastName'] = 'Votre nom de famille est incorrect.';
        elseif (preg_match ($regexName, $_POST['lastName'] )):
            $users->lastName = $lastName;
    endif;

     if ( !preg_match ($regexName, $_POST['firstName'] ) ):
        $error['errorFirstName'] = 'Votre prénom est incorrect.';
        elseif (preg_match ($regexName, $_POST['firstName'] )):
            $users->firstName = $firstName;
     endif;

    if ( !preg_match ($regexDate, date('d/m/Y',strtotime($_POST['birthDate']) ) )):
        $error['errorBirthDate'] = 'Votre date de naissance est incorrecte.';
        elseif (empty($birthDate)):
            $birthDate = NULL;
        elseif (preg_match ($regexDate, date('d/m/Y',strtotime($_POST['birthDate']) ))):
            $users->birthDate = $birthDate;
    endif; 

    if ( !preg_match ($regexMail, $_POST['mail'] ) ):
        $error['errorMail'] = 'Votre adresse mail est incorrecte.';
        elseif (preg_match ($regexMail, $_POST['mail'] )):
            $users->mail = $mail;
    endif;

    if (!preg_match ($regexPhone, $_POST['phoneNumber'])):
        $error['errorPhone'] = 'Votre numéro de téléphone est incorrect.';
        elseif(preg_match ($regexPhone, $_POST['phoneNumber'])):
            $users->phoneNumber = $phoneNumber;
    endif; 

    if (!preg_match ($regexLogin, $_POST['userLog'])):
        $error['errorLogin'] = 'Votre login est non conforme.';
        elseif(preg_match ($regexLogin, $_POST['userLog'])):
            $users->userLog = $userLog;
    endif;

    if (!preg_match ($regexPassword, $_POST['password'])):
        $error['errorPassword'] = 'Votre mot de passe est incorrect.';
        elseif(preg_match ($regexPassword, $_POST['password'])):
            $users->password = password_hash($password, PASSWORD_BCRYPT);
    endif;

    if (!preg_match ($regexPassword, $_POST['confirmPassword'])):
        $error['errorConfirmPassword'] = 'La confirmation de votre mot de passe est incorrecte.';
    endif;

 
    // modal error s'il y a une erreur
    if(!empty($error)):
        $oups = true;
        endif; 






//objet qui contient les attributs et les méthodes de la class User
    
    $users->picture = $picture;    
    $users->status = $status;
    $users->studentCourse = $studentCourse;
    $users->teacherCourse = $teacherCourse;
    $users->groupAge = $groupAge;
    $users->studentYear = $studentYear;
    $users->childBelt = $childBelt;
    $users->studentBelt = $studentBelt;
    $users->teacherRank = $teacherRank;
    $users->presentation = $presentation;
    // $users->verification = $verification;
   
endif;



// Filtre des doublons

if (isset($_POST['submitInscriptionForm'])) {
    $mail = $_POST['mail'];
    $users->mail = $mail;
    $mailResult = $users->mailChecking();
    if (count($mailResult) > 0 ) {
        $oups = true;
        $error['errorMailChecking'] = 'Cette adresse mail est déjà utilisée.';
    } 
    $userLog = $_POST['userLog'];
    $users->userLog = $userLog;
    $userLogResult = $users->logChecking();
    if (count($userLogResult) > 0 ) {
        $oups = true;
        $error['errorUserLogChecking'] = 'Cet identifiant est déjà utilisé.';
    } else {
        if(empty($error)):
            $users->addUser();
        // alert success s'il n'y a pas d'erreur
        var_dump($addUser);
        var_dump($users);
        // $success = true;

    endif; 
    }
    }





