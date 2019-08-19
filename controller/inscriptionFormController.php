<?php
//il faut tjrs appeler la base de donnée dans le controller
require '../../model/DataBase.php'; 
require '../../model/User.php';
?>



<?php
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
    






















// Tentative pour upload la photo de profil

if (isset($_FILES['picture']['tmp_name'])) {
    $taille = getimagesize($_FILES['picture']['tmp_name']);
			$largeur = $taille[0];
			$hauteur = $taille[1];
			$largeur_miniature = 300;
			$hauteur_miniature = $hauteur / $largeur * 300;
			$im = imagecreatefromjpeg($_FILES['picture']['tmp_name']);
			$im_miniature = imagecreatetruecolor($largeur_miniature
			, $hauteur_miniature);
			imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
			imagejpeg($im_miniature, 'miniatures/'.$_FILES['picture']['name'], 90);
			echo '<img src="miniatures/' . $_FILES['picture']['name'] . '">';
}


// if (!is_dir('profil'))
// mkdir('profil', 0777);

// $picture = opendir('.');

// while ($picture_courant = readdir($picture)) {
//     $extension = strtolower(strrchr($picture_courant, '.'));
//     if ($extension == '.jpg' || $extension == '.jpeg' || $extension == '.png' || $extension == '.gif') {
//         $nom_profil = 'profil/' . $picture_courant;
//         $taille = getimagesize($picture_courant);
//         $largeur = $taille[0];
//         $hauteur = $taille[1];

//         if (!file_exists($nom_profil)) {
//             $im = imagecreatefromjpeg($picture_courant);
//             $largeur_profil = 150;
//             $hauteur_profil = $hauteur / $largeur * 150;
//             $im_profil = imagecreatetruecolor($largeur_profil, $hauteur_profil);
//             imagecopyresampled($im_profil, $im, 0, 0, 0, 0, $largeur_profil, $hauteur_profil, $largeur, $hauteur);
//             imagejpeg($im_profil, $nom_profil, 60);
//         }    
//         else {
//             echo 'Nom de l\'image : '.$picture_courant.'<br>
//             Largeur : ' . $largeur.'<br>
//             Hauteur : ' . $hauteur.'<br>
//             <a href="' . $picture_courant . '"><img src="' . $nom_profil . '" title="Cliquez pour agrandir"></a>
//             <hr>';
//         }
//     }
// }

    // Constantes
// define('TARGET', '/../../assets/images/profil/');    // Repertoire cible
// define('MAX_SIZE', 100000);    // Taille max en octets du fichier
// define('WIDTH_MAX', 800);    // Largeur max de l'image en pixels
// define('HEIGHT_MAX', 800);    // Hauteur max de l'image en pixels
 
// Tableaux de donnees
// $tabExt = array('jpg','gif','png','jpeg');    // Extensions autorisees
// $infosImg = array();
 
// Variables
// $extension = '';
// $message = '';
// $nomImage = '';
 

/************************************************************
 * Script d'upload
 *************************************************************/
// if(!empty($_POST))
// {
//   // On verifie si le champ est rempli
//   if( !empty($_FILES[$picture]['picture']) )
//   {
//     // Recuperation de l'extension du fichier
//     $extension  = pathinfo($_FILES['$picture']['picture'], PATHINFO_EXTENSION);
 
//     // On verifie l'extension du fichier
//     if(in_array(strtolower($extension),$tabExt))
//     {
//       // On recupere les dimensions du fichier
//       $infosImg = getimagesize($_FILES['$picture']['tmp_picture']);
 
//       // On verifie le type de l'image
//       if($infosImg[2] >= 1 && $infosImg[2] <= 14)
//       {
//         // On verifie les dimensions et taille de l'image
//         if(($infosImg[0] <= WIDTH_MAX) && ($infosImg[1] <= HEIGHT_MAX) && (filesize($_FILES['$picture']['tmp_picture']) <= MAX_SIZE))
//         {
//           // Parcours du tableau d'erreurs
//           if(isset($_FILES['$picture']['error']) 
//             && UPLOAD_ERR_OK === $_FILES['$picture']['error'])
//           {
//             // On renomme le fichier
//             $nomImage = md5(uniqid()) .'.'. $extension;
 
//             // Si c'est OK, on teste l'upload
//             if(move_uploaded_file($_FILES['$picture']['tmp_picture'], TARGET.$nomImage))
//             {
//               $message = 'Upload réussi !';
//             }
//             else
//             {
//               // Sinon on affiche une erreur systeme
//               $message = 'Problème lors de l\'upload !';
//             }
//           }
//           else
//           {
//             $message = 'Une erreur interne a empêché l\'uplaod de l\'image';
//           }
//         }
//         else
//         {
//           // Sinon erreur sur les dimensions et taille de l'image
//           $message = 'Erreur dans les dimensions de l\'image !';
//         }
//       }
//       else
//       {
//         // Sinon erreur sur le type de l'image
//         $message = 'Le fichier à uploader n\'est pas une image !';
//       }
//     }
//     else
//     {
//       // Sinon on affiche une erreur pour l'extension
//       $message = 'L\'extension du fichier est incorrecte !';
//     }
//   }
//   else
//   {
//     // Sinon on affiche une erreur pour le champ vide
//     $message = 'Veuillez remplir le formulaire svp !';
//   }
// }























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
//objet qui contient les attributs et les méthodes de la class User
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

    if (empty($picture)):
        $picture = NULL;
    else:
        $users->picture = $picture; 
    endif;

    if ( !preg_match ($regexMail, $_POST['mail'] ) ):
        $error['errorMail'] = 'Votre adresse mail est incorrecte.';
        elseif (preg_match ($regexMail, $_POST['mail'] )):
            $users->mail = $mail;
    endif;

    if (!preg_match ($regexPhone, $_POST['phoneNumber'])):
        $error['errorPhone'] = 'Votre numéro de téléphone est incorrect.';
        elseif (empty($phoneNumber)):
            $phoneNumber = NULL;
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

    if (empty($status)):
        $status = NULL;
    else:
        $users->status = $status;
    endif;

    if (empty($studentCourse)):
        $studentCourse = NULL;
    else: 
        $users->studentCourse = $studentCourse;
    endif;

    if (empty($teacherCourse)):
        $teacherCourse = NULL;
    else: 
        $users->teacherCourse = $teacherCourse;
    endif;

    if (empty($groupAge)):
        $groupAge = NULL;
    else: 
        $users->groupAge = $groupAge;
    endif;

    if (empty($studentYear)):
        $studentYear = NULL;
    else: 
        $users->studentYear = $studentYear;
    endif;

    if (empty($childBelt)):
        $childBelt = NULL;
    else: 
        $users->childBelt = $childBelt;
    endif;

    if (empty($studentBelt)):
        $studentBelt = NULL;
    else: 
        $users->studentBelt = $studentBelt;
    endif;
    
    if (empty($teacherRank)):
        $teacherRank = NULL;
    else: 
        $users->teacherRank = $teacherRank;
    endif;

    if (empty($presentation)):
        $presentation = NULL;
    else: 
        $users->presentation = $presentation;
    endif;

    // $users->verification = $verification;
 
    // modal error s'il y a une erreur
    if(!empty($error)):
        $swalErrorForm = true;
        endif; 
   
endif;



// Filtre des doublons et reCaptcha v2

if (isset($_POST['submitInscriptionForm'])) {
    
    $mail = $_POST['mail'];
    $users->mail = $mail;
    $mailResult = $users->mailChecking();
    if (count($mailResult) > 0 ) {
        $swalErrorForm = true;
        $error['errorMailChecking'] = 'Cette adresse mail est déjà utilisée.';
    } 
    $userLog = $_POST['userLog'];
    $users->userLog = $userLog;
    $userLogResult = $users->logChecking();
    if (count($userLogResult) > 0 ) {
        $swalErrorForm = true;
        $error['errorUserLogChecking'] = 'Cet identifiant est déjà utilisé.';
    } 
    
// Ma clé privée
$secret = "6Leno7MUAAAAAOeWcoXZSyl3h6ZwQsmTG4YM58_M";
// Paramètre renvoyé par le recaptcha
$response = $_POST['g-recaptcha-response'];
// On récupère l'IP de l'utilisateur
$remoteip = $_SERVER['REMOTE_ADDR'];

$api_url = "https://www.google.com/recaptcha/api/siteverify?secret=" 
	    . $secret
	    . "&response=" . $response
	    . "&remoteip=" . $remoteip ;
	
	$decode = json_decode(file_get_contents($api_url), true);
	
	if ($decode['success'] == true) { 
        if(empty($error)):
            $users->addUser();
        // alert success s'il n'y a pas d'erreur
        $success = true;
        else:
            $swalErrorForm = true;
    endif;
	}
	
	else { 
        $reCaptchaError = true;
    }
}