<?php

// On crée un tableau error qui s'auto-incrémentera avec la valeur de l'erreur que nous lui assignerons au cas par cas, si la regex n'est pas franchie. Chaque cellule remplie comptera pour 1.
$error = [];

// On teste les regex si le formulaire est rempli
if (count($_POST) > 0)
 {
    
    $_POST= array_map('strip_tags', $_POST); // Ligne à mettre absolument pour la sécurité : interdit l'injection de script (balises non autorisées)

    if (!preg_match ($regexLogin, $_POST['login']))
    {
        $error['errorLogin'] = 'Votre login est non conforme.';
    }
    if (!preg_match ($regexPassword, $_POST['password']))
    {
        $error['errorPassword'] = 'Votre mot de passe est incorrect.';
    }

}

?>