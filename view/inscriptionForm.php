<?php
include 'head.php';
include 'navbar.php';
?>

<!-- Début formulaire d'inscription -->

<h1 id="legend1" class="text-center"><br />Inscription</h1>
<p class="text-center"><small>* champs obligatoires</small></p>

             <form method="post" action="index.php" id="inscriptionForm" name="inscriptionForm">
               <div class="card mx-auto" id="connection" style="width: 30rem;">
  <div class="card-body">
      <fieldset>

          <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>1. Identité</strong><br /><br /></h5>
    
              <ul>
              
              <li class="font-weight-bolder text-white"><label for="lastName">Nom : *</label> <input class="<?php echo (isset($_POST['lastName']) && !preg_match($regexName, $_POST['lastName']))? 'red':'';  ?>" value="<?= $_POST['lastName']?>" id="lastName" type="text" name="lastName" placeholder="Nom" required /><p class="errorMessage"><?= (isset($error['errorLastName'])) ? $error['errorLastName'] : ''; ?></p></li>

                 <li class="font-weight-bolder text-white"><label for="firstName">Prénom : *</label> <input class="<?php echo (isset($_POST['firstName']) && !preg_match($regexName, $_POST['firstName']))? 'red':'';  ?>" value="<?= $_POST['firstName']?>" id="firstName" type="text" name="firstName" placeholder="Prénom" required /><p class="errorMessage"><?= (isset($error['errorFirstName'])) ? $error['errorFirstName'] : ''; ?></p></li>

                 <li class="font-weight-bolder text-white"><label for="birthDate">Date de naissance : </label> <input class="<?php echo (isset($_POST['birthDate']) && !preg_match($regexDate, $_POST['birthDate']))? 'red':'';  ?>" value="<?= $_POST['birthDate']?>" type="tel" name="birthDate" id="birthDate" placeholder="jj/mm/aaaa"  /><p class="errorMessage"><?= (isset($error['errorBirthDate'])) ? $error['errorBirthDate'] : ''; ?></p></li>
</ul>
</fieldset>

                 <h5 for="contactInformation" class="card-title font-weight-bolder text-white"><strong>2. Coordonnées</strong><br /><br /></h5>

                 <fieldset>
                 <ul>

                 <li class="font-weight-bolder text-white"><label for="mail">Votre adresse mail : *</label> <input class="<?php echo (isset($_POST['mail']) && !preg_match($regexMail, $_POST['mail']))? 'red':'';  ?>" type="text" id="mail" name="mail" placeholder="juliedupont@exemple.com" value="<?= $_POST['mail']?>" required /><p class="errorMessage"><?= (isset($error['errorMail'])) ? $error['errorMail'] : ''; ?></p></li>

            <li class="font-weight-bolder text-white"><label for="phone">Numéro de téléphone : </label> <input class="<?php echo (isset($_POST['phone']) && !preg_match($regexPhone, $_POST['phone']))? 'red':'';  ?>" value="<?= $_POST['phone']?>" type="tel" id="phone" name="phone" placeholder=" 06xxxxxxxx " /><p class="errorMessage"><?= (isset($error['errorPhone'])) ? $error['errorPhone'] : ''; ?></p></li>

</ul>
</fieldset>

            <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>3. Identifiants de connexion</strong><br /><br /></h5>
<fieldset>
            <ul>

            <li class="font-weight-bolder text-white"><label for="login"><I>Login : *</I></label> <input class="<?php echo (isset($_POST['login']) && !preg_match($regexLogin, $_POST['login']))? 'red':'';  ?>" value="<?= $_POST['login']?>" type="text" name="login" id="login" placeholder="Pseudo" required /><small class="text-white"><br />Vous pouvez tout simplement choisir votre adresse mail.</small>
            <p class="errorMessage"><?= (isset($error['errorLogin'])) ? $error['errorLogin'] : ''; ?></p></li>

<li class="font-weight-bolder text-white"><label for="password"><I>Mot de passe : *</I></label> <input class="<?php echo (isset($_POST['password']) && !preg_match($regexPassword, $_POST['password']))? 'red':'';  ?>" value="<?= $_POST['password']?>" type="password" name="password" id="password" required/><p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p></li>

<li class="font-weight-bolder text-white"><label for="confirmPassword"><I>Confirmation : *</I></label> <input class="<?php echo (isset($_POST['confirmPassword']) && !preg_match($regexPassword, $_POST['confirmPassword']))? 'red':'';  ?>" value="<?= $_POST['confirmPassword']?>" type="password" name="confirmPassword" id="confirmPassword" required/>
    <p class="card-text"><small class="text-white">Entre 8 et 15 caractères, contenant au moins une minuscule et une majuscule, un chiffre et un caractère spécial.</small></p><p class="errorMessage"><?= (isset($error['errorConfirmPassword'])) ? $error['errorConfirmPassword'] : ''; ?></p></li>

                </ul>

                <p><br /><button id="submitForm" type="submit" name="button" class="float-right rounded-circle">Valider</button></p>

          </fieldset>
          </div>
</div>

</form>

<!-- Fin formulaire d'inscription -->

<?php
include 'footer.php';
?>