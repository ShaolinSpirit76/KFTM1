<?php

// On crée un tableau error qui s'auto-incrémentera avec la valeur de l'erreur que nous lui assignerons au cas par cas, si la regex n'est pas franchie. Chaque cellule remplie comptera pour 1.
$error = [];

// On teste les regex si le formulaire est rempli
if (count($_POST) > 0)
 {
    
    $_POST= array_map('strip_tags', $_POST); // Ligne à mettre absolument pour la sécurité : interdit l'injection de script (balises non autorisées)

    if ( !preg_match ($regexName, $_POST['lastName'] ) )
    {
        $error['errorLastName'] = 'Votre nom de famille est incorrect.';
    } 
     if ( !preg_match ($regexName, $_POST['firstName'] ) )
    {
        $error['errorFirstName'] = 'Votre prénom est incorrect.';
    } 
    if ( !preg_match ($regexDate, date('d/m/Y',strtotime($_POST['birthDate']) ) ))
    {
        $error['errorBirthDate'] = 'Votre date de naissance est incorrecte.';
    } 
    if ( !preg_match ($regexMail, $_POST['mail'] ) )
    {
        $error['errorMail'] = 'Votre adresse mail est incorrect.';
    } 
    if (!preg_match ($regexPhone, $_POST['phoneNumber']))
    {
        $error['errorPhone'] = 'Votre numéro de téléphone est incorrect.';
    } 
    if (!preg_match ($regexLogin, $_POST['login']))
    {
        $error['errorLogin'] = 'Votre login est non conforme.';
    }
    if (!preg_match ($regexPassword, $_POST['password']))
    {
        $error['errorPassword'] = 'Votre mot de passe est incorrect.';
    }
    if (!preg_match ($regexPassword, $_POST['confirmPassword']))
    {
        $error['errorConfirmPassword'] = 'La confirmation de votre mot de passe est incorrecte.';
    }
}

?>
