<?php
 include '../templates/head.php';
 include '../../controller/regex.php';
 include '../../controller/login.php';

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

include '../../controller/regex.php';
include '../../controller/inscription.php';
?>

<!-- Début formulaire d'inscription -->

<h1 id="legend1" class="text-center"><br />Inscription</h1>
<p class="text-center"><small>* champs obligatoires</small></p>

             <form method="POST" action="inscriptionForm.php" id="inscriptionForm" name="inscriptionForm">
               <div class="card mx-auto" id="connexion" style="width: 30rem;">
  <div class="card-body">
      <fieldset>

          <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>1. Identité</strong><br /><br /></h5>
    
              <ul>
              
              <li class="font-weight-bolder text-white"><label for="lastName">Nom * : </label> <input class="<?php echo (isset($_POST['lastName']) && !preg_match($regexName, $_POST['lastName']))? 'red':'';  ?>" value="<?= $_POST['lastName']?>" id="lastName" type="text" name="lastName" placeholder="Nom" required /><p class="errorMessage"><?= (isset($error['errorLastName'])) ? $error['errorLastName'] : ''; ?></p></li>

                 <li class="font-weight-bolder text-white"><label for="firstName">Prénom * : </label> <input class="<?php echo (isset($_POST['firstName']) && !preg_match($regexName, $_POST['firstName']))? 'red':'';  ?>" value="<?= $_POST['firstName']?>" id="firstName" type="text" name="firstName" placeholder="Prénom" required /><p class="errorMessage"><?= (isset($error['errorFirstName'])) ? $error['errorFirstName'] : ''; ?></p></li>

                 <li class="font-weight-bolder text-white"><label for="birthDate">Date de naissance : </label> <input class="<?php echo (isset($_POST['birthDate']) && !preg_match($regexDate, $_POST['birthDate']))? 'red':'';  ?>" value="<?= $_POST['birthDate']?>" type="tel" name="birthDate" id="birthDate" placeholder="jj/mm/aaaa"  /><p class="errorMessage"><?= (isset($error['errorBirthDate'])) ? $error['errorBirthDate'] : ''; ?></p></li>

                 <li class="font-weight-bolder text-white"><label for="picture">Photo de profil : </label> <input type="file" name="picture" id="picture" placeholder="Moi.jpg" />
                 <small class="text-white"><br /><i>De préférence un .jpg</i></small></li>
</ul>
</fieldset>

                 <h5 for="contactInformation" class="card-title font-weight-bolder text-white"><strong>2. Coordonnées</strong><br /><br /></h5>

                 <fieldset>
                 <ul>

                 <li class="font-weight-bolder text-white"><label for="mail">Adresse mail * : </label> <input class="<?php echo (isset($_POST['mail']) && !preg_match($regexMail, $_POST['mail']))? 'red':'';  ?>" type="text" id="mail" name="mail" placeholder="juliedupont@exemple.com" value="<?= $_POST['mail']?>" required /><p class="errorMessage"><?= (isset($error['errorMail'])) ? $error['errorMail'] : ''; ?></p></li>

            <li class="font-weight-bolder text-white"><label for="phoneNumber">Numéro de téléphone : </label> <input class="<?php echo (isset($_POST['phoneNumber']) && !preg_match($regexPhone, $_POST['phoneNumber']))? 'red':'';  ?>" value="<?= $_POST['phoneNumber']?>" type="tel" id="phoneNumber" name="phoneNumber" placeholder=" 06xxxxxxxx " /><p class="errorMessage"><?= (isset($error['errorPhone'])) ? $error['errorPhone'] : ''; ?></p></li>

</ul>
</fieldset>

            <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>3. Identifiants de connexion</strong><br /><br /></h5>
<fieldset>
            <ul>

            <li class="font-weight-bolder text-white"><label for="login"><I>Identifiant * : </I></label> <input class="<?php echo (isset($_POST['login']) && !preg_match($regexLogin, $_POST['login']))? 'red':'';  ?>" value="<?= $_POST['login']?>" type="text" name="login" id="login" placeholder="Pseudo" required /><small class="text-white"><br /><i>Vous pouvez tout simplement choisir votre adresse mail.</i></small>
            <p class="errorMessage"><?= (isset($error['errorLogin'])) ? $error['errorLogin'] : ''; ?></p></li>

<li class="font-weight-bolder text-white"><label for="password"><I>Mot de passe * : </I></label> <input class="<?php echo (isset($_POST['password']) && !preg_match($regexPassword, $_POST['password']))? 'red':'';  ?>" value="<?= $_POST['password']?>" type="password" name="password" id="password" required/><p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p></li>

<li class="font-weight-bolder text-white"><label for="confirmPassword"><I>Confirmation * : </I></label> <input class="<?php echo (isset($_POST['confirmPassword']) && !preg_match($regexPassword, $_POST['confirmPassword']))? 'red':'';  ?>" value="<?= $_POST['confirmPassword']?>" type="password" name="confirmPassword" id="confirmPassword" required/>
    <p class="card-text"><small class="text-white"><i>Entre 8 et 15 caractères, contenant au moins une minuscule et une majuscule, un chiffre et un caractère spécial.</i></small></p><p class="errorMessage"><?= (isset($error['errorConfirmPassword'])) ? $error['errorConfirmPassword'] : ''; ?></p></li>

                </ul>

            </fieldset>

          <h5 for="statut" class="card-title font-weight-bolder text-white"><strong>4. Statut</strong><br /><br /></h5>
<fieldset>
            <ul>

    <div id="rank">
<li class="font-weight-bolder text-white"> 
<label for="status">Rang * : </label>

  <input type="radio" id="élève" name="rank" value="élève">
  <label for="élève">Élève</label>

  <input type="radio" id="maître" name="rank" value="maître">
  <label for="maître">Maître</label>

  <input type="radio" id="maître_et_élève" name="rank" value="maître_et_élève">
  <label for="maître_et_élève">Maître et élève</label>
 
</li>
</div>



<div id="studentCourse">
            <li class="font-weight-bolder text-white"><label for="studentCourse">Discipline (élève) : </label>
            <select name="studentCourse">
            <option value="" selected disabled>Choisissez</option>
                <option value="Kung-Fu">Kung-Fu</option> 
                <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
                <option value="Sanda & Shoubo">Sanda & Shoubo</option>
</select></li>
</div>

<div id="teacherCourse">
            <li class="font-weight-bolder text-white"><label for="teacherCourse">Cours (maître) : </label>
            <select name="teacherCourse">
            <option value="" selected disabled>Choisissez</option>
                <option value="Kung-Fu">Kung-Fu</option> 
                <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
                <option value="Sanda & Shoubo">Sanda & Shoubo</option>
</select></li>
</div>

<div id="group">
<li class="font-weight-bolder text-white"> 
<label for="group">Groupe : </label>

  <input type="radio" id="Enfants" name="group" value="Enfants">
  <label for="Enfants">Enfants</label>

  <input type="radio" id="Ados" name="group" value="Ados">
  <label for="Ados">Ados</label>

  <input type="radio" id="Adultes" name="group" value="Adultes">
  <label for="Adultes">Adultes</label>
    
            
            </li>
</div>


<div id="studentYear">
<li class="font-weight-bolder text-white"><label for="studentYear">Année : </label>
            <select name="studentYear" id="studentYear">
            <option value="" selected disabled>Choisissez</option>
                <option value="1ère année">1ère</option> 
                <option value="2ème année">2ème</option>
                <option value="3ème année">3ème</option>
                <option value="4ème année">4ème</option> 
                <option value="5ème année">5ème</option>
                <option value="6ème année">6ème</option>
                <option value="7ème année">7ème</option> 
                <option value="8ème année">8ème</option>
                <option value="9ème année">9ème</option>
                <option value="10ème année">10ème</option> 
                <option value="Vétéran">Vétéran</option>
          </select></li>
</div>


<div id="childBelt">
          <li class="font-weight-bolder text-white"><label for="childBelt">Ceinture : </label>
            <select name="childBelt">
            <option value="" selected disabled>Choisissez</option>

            <optgroup label="Blanche - Grue">
            <option value="Ceinture blanche-Grue">Grue</option>
                <option value="Ceinture blanche-Grue 1ère barrette">Grue - 1ère barrette</option> 
                <option value="Ceinture blanche-Grue 2ème barrette">Grue - 2ème barrette</option>
                <option value="Ceinture blanche-Grue 3ème barrette">Grue - 3ème barrette</option>
            <optgroup label="Jaune - Dragon">
            <option value="Ceinture jaune-Dragon">Dragon</option>
                <option value="Ceinture jaune-Dragon 1ère barrette">Dragon - 1ère barrette</option> 
                <option value="Ceinture jaune-Dragon 2ème barrette">Dragon - 2ème barrette</option>
                <option value="Ceinture jaune-Dragon 3ème barrette">Dragon - 3ème barrette</option>
            <optgroup label="Rouge - Tigre">
              <option value="Ceinture rouge-Tigre">Tigre</option>
              <option value="Ceinture rouge-Tigre 1ère barrette">Tigre - 1ère barrette</option> 
                <option value="Ceinture rouge-Tigre 2ème barrette">Tigre - 2ème barrette</option>
                <option value="Ceinture rouge-Tigre 3ème barrette">Tigre - 3ème barrette</option>

          </select></li>
</div>

<div id="youngBelt">
          <li class="font-weight-bolder text-white"><label for="youngBelt">Ceinture : </label>
            <select name="youngBelt">
            <option value="" selected disabled>Choisissez</option>

            <optgroup label="Blanche - Grue">
            <option value="Ceinture blanche-Grue">Grue</option>
                <option value="Ceinture blanche-Grue 1ère barrette">Grue - 1ère barrette</option> 
                <option value="Ceinture blanche-Grue 2ème barrette">Grue - 2ème barrette</option>
                <option value="Ceinture blanche-Grue 3ème barrette">Grue - 3ème barrette</option>
            <optgroup label="Jaune - Dragon">
            <option value="Ceinture jaune-Dragon">Dragon</option>
                <option value="Ceinture jaune-Dragon 1ère barrette">Dragon - 1ère barrette</option> 
                <option value="Ceinture jaune-Dragon 2ème barrette">Dragon - 2ème barrette</option>
                <option value="Ceinture jaune-Dragon 3ème barrette">Dragon - 3ème barrette</option>
            <optgroup label="Rouge - Tigre">
              <option value="Ceinture rouge-Tigre">Tigre</option>
              <option value="Ceinture rouge-Tigre 1ère barrette">Tigre - 1ère barrette</option> 
                <option value="Ceinture rouge-Tigre 2ème barrette">Tigre - 2ème barrette</option>
                <option value="Ceinture rouge-Tigre 3ème barrette">Tigre - 3ème barrette</option>

          </select></li>
</div>



<div id="studentBelt">
          <li class="font-weight-bolder text-white"><label for="studentBelt">Ceinture : </label>
            <select name="studentBelt">
            <option value="" selected disabled>Choisissez</option>
            <optgroup label="Blanche">
            <option value="Ceinture blanche">Blanche</option>
                <option value="Ceinture blanche 1ère barrette">Blanche - 1ère barrette</option> 
                <option value="Ceinture blanche 2ème barrette">Blanche - 2ème barrette</option>
                <option value="Ceinture blanche 3ème barrette">Blanche - 3ème barrette</option>
                <option value="Ceinture blanche 4ème barrette">Blanche - 4ème barrette</option> 
            <optgroup label="Jaune">
            <option value="Ceinture jaune">Jaune</option>
                <option value="Ceinture jaune 1ère barrette">Jaune - 1ère barrette</option> 
                <option value="Ceinture jaune 2ème barrette">Jaune - 2ème barrette</option>
            <optgroup label="Rouge">
              <option value="Ceinture rouge">Rouge</option>
                <option value="Ceinture rouge 1ère barrette">Rouge - 1ère barrette</option>
                <optgroup label="Noire">
              <option value="Ceinture noire">Noire</option>
              <option value="1er DAN">1er DAN</option>
              <option value="2ème DAN">2ème DAN</option>
              <option value="3ème DAN">3ème DAN</option>
              <option value="4ème DAN">4ème DAN</option>
              <option value="5ème DAN">5ème DAN</option>
              <option value="6ème DAN">6ème DAN</option>
          </select></li>
</div>


<div id="teacherRank">
          <li class="font-weight-bolder text-white"><label for="teacherRank">Grade : </label>
            <select name="teacherRank">
            <option value="" selected disabled>Choisissez</option>
                <option value="Sibak">Sibak</option>
                <option value="Jiaoshe">Jiaoshe</option> 
                <option value="Taïjiaoshe">Taïjiaoshe</option>
                <option value="Laoshe">Laoshe</option>
                <option value="Tailaoshe">Tailaoshe</option> 
                <option value="" selected disabled>Sifu - Jean-Marie Levray</option> 
                <option value="" selected disabled>Taïsifu</option>
                <option value="" selected disabled>Sikung - Jean-Paul Cabrol</option>
                <option value="" selected disabled>Sijo - Michel Person N'Guyen</option>
</select>
</li>
</div>

</ul>


<label for="checkForm" class="text-white">Je certifie sur l'honneur l'exactitude des informations<br /> renseignées ci-dessus.</label>
<input type="checkbox" id="checkForm" name="checkForm" value="checkForm" required>


<p><br /><button id="submitInscriptionForm" type="submit" name="button" class="float-right rounded">Valider</button></p>

</fieldset>
          </div>
</div>

</form>


<div id="accordion" style="width: 30rem;" class="mx-auto">
  <div class="card">
    <div class="card-header" id="headingOne">
      <h5 class="mb-0 text-center">
        <button class="btn btn-link text-white" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
          <span class="mx-auto text-center text-align-center align-items-center">En savoir plus sur la gestion de vos données</span>
        </button>
      </h5>
    </div>

    <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordion">
      <div class="card-body text-justify">
      Nous vous garantissons que les informations renseignées ci-dessus sont recueillies par le maître de l'école (Sifu Jean-Marie) dans le seul objectif d'en simplifier la gestion.<br /> Par ailleurs, elles permettent également d'améliorer votre expérience sur le site de l'école, en tant que membre.<br /><br /> En aucun cas vos coordonnées personnelles ne seront sciemment communiquées à une personne ou une entité tierce ; Sifu Jean-Marie et le webmaster prennent la confidentialité des membres du cercle très au sérieux.<br /><br /> Vous pourrez choisir vous-mêmes les informations que vous souhaitez afficher sur le site en vous rendant sur la page "Mon compte" de l'onglet "Connexion".<br /><br />Si vous souhaitez en savoir plus sur la protection et l'utilisation de vos données, n'hésitez pas à visiter nos mentions légales situées en bas de page, notamment les <a href="../mentions/legalInfos.php">informations légales</a> du site et notre <a href="../mentions/RGPD.php">RGPD</a>.
      </div>
    </div>
  </div>
  
</div>




<!-- Fin formulaire d'inscription -->

<?php
// Variables dynamiques pour la navbar à partir à partir de form
$AssoInfos = '../mentions/AssoInfos.php';
$legalInfos = '../mentions/legalInfos.php';
$CGU = '../mentions/CGU.php';
$RGPD = '../mentions/RGPD.php';

  include '../templates/footer.php';
?>