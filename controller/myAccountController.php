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
    $lastName = $_POST['newLastName'];
    $firstName = $_POST['newFirstName'];
    $birthDate = $_POST['newBirthDate'];
    $picture = $_POST['newPicture'];
    $mail = $_POST['newMail'];
    $phoneNumber = $_POST['newPhoneNumber'];
    $userLog = $_POST['newUserLog'];
    $password = $_POST['newPassword'];
    $status = $_POST['newStatus'];
    $studentCourse = $_POST['newStudentCourse'];
    $teacherCourse = $_POST['newTeacherCourse'];
    $groupAge = $_POST['newGroupAge'];
    $studentYear = $_POST['newStudentYear'];
    $childBelt = $_POST['newChildBelt'];
    $studentBelt = $_POST['newStudentBelt'];
    $teacherRank = $_POST['newTeacherRank'];
    $presentation = $_POST['newPresentation'];
    


    
    $_POST = array_map('strip_tags', $_POST); // Ligne à mettre absolument pour la sécurité : interdit l'injection de script (balises non autorisées)

    if (isset($_POST['newLastName'])):
        if ( !preg_match ($regexName, $_POST['newLastName'] ) ):
        $error['errorLastName'] = 'Votre nom de famille est incorrect.';
        elseif (empty($_POST['newLastName'])):
            $lastName = $_SESSION['userInfos'][0]['lastName'];
        elseif (preg_match ($regexName, $_POST['newLastName'] )):
//objet qui contient les attributs et les méthodes de la class User
            $users->lastName = $lastName;
    endif;
else:
    $lastName = $_SESSION['userInfos'][0]['lastName'];
endif;

    if (isset($_POST['newFirstName'])):
        if ( !preg_match ($regexName, $_POST['newFirstName'] ) ):
        $error['errorFirstName'] = 'Votre prénom est incorrect.';
        elseif (empty($_POST['newFirstName'])):
            $firstName = $_SESSION['userInfos'][0]['firstName'];
        elseif (preg_match ($regexName, $_POST['newFirstName'] )):
            $users->firstName = $firstName;
     endif;
    else:
        $firstName = $_SESSION['userInfos'][0]['firstName'];
endif;

if (isset($_POST['newBirthDate'])):
     if ( !preg_match ($regexDate, date('d/m/Y',strtotime($_POST['newBirthDate']) ) )):
        $error['errorBirthDate'] = 'Votre date de naissance est incorrecte.';
        elseif (empty($_POST['newBirthDate'])):
            $birthDate = $_SESSION['userInfos'][0]['birthDate'];
        elseif (preg_match ($regexDate, date('d/m/Y',strtotime($_POST['newBirthDate']) ))):
            $users->birthDate = $birthDate;
    endif; 
else:
    $birthDate = $_SESSION['userInfos'][0]['birthDate'];
endif;

if (isset($_POST['newPicture'])):
    if (empty($_POST['newPicture'])):
        $picture = $_SESSION['userInfos'][0]['picture'];
    else: 
        $users->picture = $picture;
    endif;
else:
        $picture = $_SESSION['userInfos'][0]['picture'];
endif;

    if (isset($_POST['newMail'])):
        if ( !preg_match ($regexMail, $_POST['newMail'] ) ):
        $error['errorMail'] = 'Votre adresse mail est incorrecte.';
        elseif (empty($_POST['newMail'])):
            $mail = $_SESSION['userInfos'][0]['mail'];
        elseif (preg_match ($regexMail, $_POST['newMail'] )):
            $users->mail = $mail;
    endif;
else: 
    $mail = $_SESSION['userInfos'][0]['mail'];
endif;

if (isset($_POST['newPhoneNumber'])):
    if ( !preg_match ($regexPhone, $_POST['newPhoneNumber'] ) ):
        $error['errorPhone'] = 'Votre numéro de téléphone est incorrect.';
        elseif (empty($_POST['newPhoneNumber'])):
            $phoneNumber = $_SESSION['userInfos'][0]['phoneNumber'];
        elseif(preg_match ($regexPhone, $_POST['newPhoneNumber'])):
            $users->phoneNumber = $phoneNumber;
        endif;
elseif (empty($phoneNumber)):
       $phoneNumber = $_SESSION['userInfos'][0]['phoneNumber'];
    endif; 


if (isset($_POST['newUserLog'])):
    if ( !preg_match ($regexLogin, $_POST['newUserLog'] ) ):
        $error['errorLogin'] = 'Votre login est non conforme.';
        elseif (empty($_POST['newUserLog'])):
            $userLog = $_SESSION['userInfos'][0]['userLog'];
        elseif(preg_match ($regexLogin, $_POST['newUserLog'])):
            $users->userLog = $userLog;
    endif;
else:
    $userLog = $_SESSION['userInfos'][0]['userLog'];
 endif; 


if (isset($_POST['newPassword'])):
    if ( !preg_match ($regexPassword, $_POST['newPassword'] ) ):
        $error['errorPassword'] = 'Votre mot de passe est incorrect.';
        elseif (empty($_POST['newPassword'])):
            $password = $_SESSION['userInfos'][0]['password'];
        elseif(preg_match ($regexPassword, $_POST['newPassword'])):
            $users->password = password_hash($password, PASSWORD_BCRYPT);
    endif;
else:
    $password = $_SESSION['userInfos'][0]['password'];
 endif; 


 if (isset($_POST['newConfirmPassword'])):
    if ( !preg_match ($regexPassword, $_POST['newConfirmPassword'] ) ):
        $error['errorConfirmPassword'] = 'La confirmation de votre mot de passe est incorrecte.';
    endif;
endif;

    
if (isset($_POST['newStatus'])):
    if (empty($_POST['newStatus'])):
        $status = $_SESSION['userInfos'][0]['status'];
    else:
        $users->status = $status;
    endif;
else: 
    $status = $_SESSION['userInfos'][0]['status'];   
endif;


if (isset($_POST['newStudentCourse'])):
    if (empty($_POST['newStudentCourse'])):
        $studentCourse = $_SESSION['userInfos'][0]['studentCourse'];
    else: 
        $users->studentCourse = $studentCourse;
    endif;
else: 
    $studentCourse = $_SESSION['userInfos'][0]['studentCourse'];   
endif;


if (isset($_POST['newTeacherCourse'])):
    if (empty($_POST['newTeacherCourse'])):
        $teacherCourse = $_SESSION['userInfos'][0]['teacherCourse'];
    else: 
        $users->teacherCourse = $teacherCourse;
    endif;
else: 
    $teacherCourse = $_SESSION['userInfos'][0]['teacherCourse'];   
endif;


if (isset($_POST['newGroupAge'])):
    if (empty($_POST['newGroupAge'])):
        $groupAge = $_SESSION['userInfos'][0]['groupAge'];
    else: 
        $users->groupAge = $groupAge;
    endif;
else: 
    $groupAge = $_SESSION['userInfos'][0]['groupAge'];   
endif;


if (isset($_POST['newStudentYear'])):
    if (empty($_POST['newStudentYear'])):
        $studentYear = $_SESSION['userInfos'][0]['studentYear'];
    else: 
        $users->studentYear = $studentYear;
    endif;
else: 
    $studentYear = $_SESSION['userInfos'][0]['studentYear'];   
endif;


if (isset($_POST['newChildBelt'])):
    if (empty($_POST['newChildBelt'])):
        $childBelt = $_SESSION['userInfos'][0]['childBelt'];
    else: 
        $users->childBelt = $childBelt;
    endif;
else: 
    $childBelt = $_SESSION['userInfos'][0]['childBelt'];   
endif;

 
if (isset($_POST['newStudentBelt'])):
    if (empty($_POST['newStudentBelt'])):
        $studentBelt = $_SESSION['userInfos'][0]['studentBelt'];
    else: 
        $users->studentBelt = $studentBelt;
    endif;
else: 
    $studentBelt = $_SESSION['userInfos'][0]['studentBelt'];   
endif;

  
if (isset($_POST['newTeacherRank'])):
    if (empty($_POST['newTeacherRank'])):
        $teacherRank = $_SESSION['userInfos'][0]['teacherRank'];
    else: 
        $users->teacherRank = $teacherRank;
    endif;
else: 
    $teacherRank = $_SESSION['userInfos'][0]['teacherRank'];   
endif;


if (isset($_POST['newPresentation'])):
    if (empty($_POST['newPresentation'])):
        $presentation = $_SESSION['userInfos'][0]['presentation'];
    else: 
        $users->presentation = $presentation;
    endif;
else: 
    $presentation = $_SESSION['userInfos'][0]['presentation'];   
endif;

    // $users->verification = $verification;
 
    // modal error s'il y a une erreur
    if(!empty($error)):
        $swalErrorForm = true;
        endif; 
   
endif;




// Modification des données sensibles
if(isset($_POST['verificationButton'])):
    $passwordConnect = htmlspecialchars($_POST['passwordConnect']);
    if ((isset($_POST['passwordConnect'])) && !password_verify($_POST['passwordConnect'], $_SESSION['userInfos'][0]['password'])):
        $error['errorCheckPassword'] = 'Ceci n\'est pas votre mot de passe actuel.';
        $mdpFailed = true; 
    else:
        $identificationSuccess = true;
        endif;
endif;






// Filtre des doublons

if (isset($_POST['modifRequest'])) { // test bouton d'enregistrement / update

// on check le doublon du mail on prenant en compte du mail de session
    $mail = $_POST['newMail'];
    $users->mail = $mail;
    $mailResult = $users->mailChecking();
    if ($mailResult[0]['mail'] != $_SESSION['userInfos'][0]['mail']){
        
        if (count($mailResult) > 0){
            $swalErrorForm = true;
            $error['errorMailChecking'] = 'Cette adresse mail est déjà utilisée.';
        }

    }


    $userLog = $_POST['newUserLog'];
    $users->userLog = $userLog;
    $userLogResult = $users->logChecking();
    if ($userLogResult[0]['userLog'] != $_SESSION['userInfos'][0]['userLog']){

        if (count($userLogResult) > 0){
            $swalErrorForm = true;
            $error['errorUserLogChecking'] = 'Cet identifiant est déjà utilisé.';
        }

    }


    // Validation de la mise à jour du profil
    if(empty($error)):
            var_dump($users);
            $users->updateUser();
    // alert success s'il n'y a pas d'erreur
        // $updateSuccess = true;
    endif; 

    }
    


// Supprimer le profil
    if (isset($_POST['deleteRequest'])) {
        $passwordConnect = htmlspecialchars($_POST['passwordConnect']);
        if ((isset($_POST['passwordConnect'])) && !password_verify($_POST['passwordConnect'], $_SESSION['userInfos'][0]['password'])):
            $error['errorCheckPassword'] = 'Ceci n\'est pas votre mot de passe actuel.';
            $mdpFailed = true; 
        else:
            $deleteSuccess = true;
            $users->deleteUser();
            session_destroy();
            endif;
           
    }


    




    
        





