<?php
// on test si un fichier a été sélectionné en upload
if (isset($_FILES['picture']['tmp_name'])) { 
    // $taille est un Array contenant les infos de l'image
    $taille = getimagesize($_FILES['picture']['tmp_name']); 

    // on récupère la largeur et la hauteur de l'image
    $largeur = $taille[0]; 
    $hauteur = $taille[1];

    // Transformation selon les besoins de la miniature
    $largeur_miniature = 300;
    $hauteur_miniature = $hauteur / $largeur * 300;

    $im = imagecreatefromjpeg($_FILES['picture']['tmp_name']);
    $im_miniature = imagecreatetruecolor($largeur_miniature, $hauteur_miniature);
    
    imagecopyresampled($im_miniature, $im, 0, 0, 0, 0, $largeur_miniature, $hauteur_miniature, $largeur, $hauteur);
    
    imagejpeg($im_miniature, 'miniatures/'.$_FILES['picture']['name'], 90);
    
	echo '<img src="miniatures/' . $_FILES['picture']['name'] . '">';
}
// Nous faisons un var_dump du nom de l'image
echo($_FILES['picture']['name']);

?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <title>Test Upload</title>
</head>

<body>
    <h1>UPLOAD</h1>
    <form method="POST" action="index3.php" id="inscriptionForm" name="inscriptionForm" enctype="multipart/form-data">

        <label for="picture">Photo de profil : </label>
        <input type="file" name="picture" id="picture" />
        <p><i>De préférence un .jpg</i></p>
        <button type="submit">Envoyer</button>
    </form>
</body>

</html>