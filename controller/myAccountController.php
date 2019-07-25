<?php
// Variables dynamiques pour la navbar à partir de form
$home = '../../index.php';
$schoolDoors = '../pages/schoolDoors.php';
$news = '../pages/news.php';
$kungfu = '../pages/kungfu.php';
$taichi = '../pages/taichi.php';
$sanda = '../pages/sanda.php';
$ourCircle = '../pages/ourCircle.php';
$pictures = '../pages/pictures.php';
$video = '../pages/video.php';
$techniques = '../pages/techniques.php';
$otherSchools = '../pages/otherSchools.php';
$contact = 'contact.php';
$shop = '../pages/shop.php';
$connexion = 'connexion.php';
$myAccount = 'myAccount.php';
$checkCalendar = 'checkCalendar.php';

include '../templates/navbar.php';


//il faut tjrs appeler la base de donnée dans le controller
require '../../model/DataBase.php'; 
require '../../model/User.php';


// On crée un tableau error qui s'auto-incrémentera avec la valeur de l'erreur que nous lui assignerons au cas par cas, si la regex n'est pas franchie. Chaque cellule remplie comptera pour 1.
$error = [];


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
    $login = $_POST['login'];
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
        elseif (preg_match ($regexDate, date('d/m/Y',strtotime($_POST['birthDate']) ))):
            $users->birthDate = $birthDate;
    endif; 

    if ( !preg_match ($regexMail, $_POST['mail'] ) ):
        $error['errorMail'] = 'Votre adresse mail est incorrect.';
        elseif (preg_match ($regexMail, $_POST['mail'] )):
            $users->mail = $mail;
    endif;

    if (!preg_match ($regexPhone, $_POST['phoneNumber'])):
        $error['errorPhone'] = 'Votre numéro de téléphone est incorrect.';
        elseif(preg_match ($regexPhone, $_POST['phoneNumber'])):
            $users->phoneNumber = $phoneNumber;
    endif; 

    if (!preg_match ($regexLogin, $_POST['login'])):
        $error['errorLogin'] = 'Votre login est non conforme.';
        elseif(preg_match ($regexLogin, $_POST['login'])):
            $users->login = $login;
    endif;

    if (!preg_match ($regexPassword, $_POST['password'])):
        $error['errorPassword'] = 'Votre mot de passe est incorrect.';
        elseif(preg_match ($regexPassword, $_POST['password'])):
            $users->password = $password;
    endif;

    if (!preg_match ($regexPassword, $_POST['confirmPassword'])):
        $error['errorConfirmPassword'] = 'La confirmation de votre mot de passe est incorrecte.';
    endif;


    // modal error s'il y a une erreur
    if(!empty($error)):
        ?>
<script>
  Swal.fire({
  title: 'Oups !',
  text: 'Il doit y avoir une erreur dans ton formulaire... :(',
  type: 'error',
  confirmButtonText: 'Ok'
});
setTimeout(function(){
      
    }, 2000);
</script>
<?php endif; 


// modal success s'il n'y a pas d'erreur

if(empty($error)):
    ?>
<script>
Swal.fire(
  'Bien joué !',
  'Ta modification a bien été enregistrée !',
  'success'
);
setTimeout(function(){
   document.location.href = "../../index.php"; 
}, 4000);
</script>
<?php endif; 

    
        
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
    $users->updateUser();



endif;



// Variables dynamiques pour la navbar à partir à partir de form
$AssoInfos = '../mentions/AssoInfos.php';
$legalInfos = '../mentions/legalInfos.php';
$CGU = '../mentions/CGU.php';
$RGPD = '../mentions/RGPD.php';
