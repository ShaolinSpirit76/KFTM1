<?php
require_once '../../controller/myAccountControllerStart.php';
include '../templates/head.php';
require '../../controller/regexMyAccount.php';
require_once '../../controller/myAccountController.php';
?>

<!-- Bouton switch on/off -->
<div class="text-center">
  <label>Afficher mon profil dans la page "Notre cercle"</label>
  <div class="onoffswitch">
    <input type="checkbox" name="onoffswitch" class="onoffswitch-checkbox" id="myonoffswitch" checked>
    <label class="onoffswitch-label" for="myonoffswitch">
      <span class="onoffswitch-inner"></span>
      <span class="onoffswitch-switch"></span>
    </label>
  </div>
</div>



<!-- Début affichage du compte -->

<h1 id="legend1" class="text-center"><br />Mon profil</h1>

<form method="POST" action="myAccount.php" id="updateForm" name="updateForm">
  <div class="card mx-auto" id="update" style="width: 60rem;">
    <div class="card-body">
      <fieldset>

        <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>1. Identité</strong><br /><br />
        </h5>

        <ul>

          <li class="font-weight-bolder text-white">
            <label for="lastName">Nom : <?= ($_SESSION['userInfos'][0]['lastName']) ?></label> </li>

          <li class="font-weight-bolder text-white">
            <label for="firstName">Prénom : <?= ($_SESSION['userInfos'][0]['firstName']) ?></label> </li>

          <?php if (isset($_SESSION['userInfos'][0]['birthDate'])): ?>

          <li class="font-weight-bolder text-white">
            <label for="birthDate">Date de naissance :
              <?= ucfirst(strftime('%A %d %B %Y',strtotime($_SESSION['userInfos'][0]['birthDate']))) ?></label>
          </li>

          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="birthDate">Ajouter ma date de naissance : </label>
            <input
              class="inputInscription <?php echo (isset($_POST['birthDate']) && !preg_match($regexDate, date('d/m/Y',strtotime($_POST['birthDate']) )))? 'red':'';  ?>"
              value="<?= $_POST['birthDate']?>" type="date" name="birthDate" id="birthDate" placeholder="jj/mm/aaaa" />
            <p class="errorMessage"><?= (isset($error['errorBirthDate'])) ? $error['errorBirthDate'] : ''; ?></p>
          </li>

          <?php endif; ?>


          <?php if (!empty($picture)): ?>

          <li class="font-weight-bolder text-white"><label for="picture">Photo de profil :
              <?= ($_SESSION['userInfos'][0]['picture']) ?></label> <button type="button" class="badge badge-secondary"
              id="updatePicture">Changer ma photo de profil</button>

                <?php else: ?>

    <li class="font-weight-bolder text-white"><label for="picture">Ajouter une photo de profil : </label> <input
        type="file" name="picture" id="picture" accept="image/*" />
      <small class="text-white"><br /><i>De préférence un .jpg</i></small></li>

    <?php endif; ?>

    <div id="newPicture">

          <span class="font-weight-bolder text-white"><label for="picture">Nouvelle photo de profil : </label> <input
              type="file" name="picture" id="picture" accept="image/*" />
            <small class="text-white"><br /><i>De préférence un .jpg</i></small></span>

    </div>

    </ul>
    </fieldset>

    <h5 for="contactInformation" class="card-title font-weight-bolder text-white"><strong>2.
        Coordonnées</strong><br /><br /></h5>

    <fieldset>
      <ul>


        <li class="font-weight-bolder text-white"><label for="mail">Adresse mail : </label> <input
            class="inputInscription <?php echo (isset($_POST['mail']) && !preg_match($regexMail, $_POST['mail']))? 'red':'';  ?>"
            type="text" id="mail" name="mail" value="<?= ($_SESSION['userInfos'][0]['mail']) ?>"
            placeholder="julie.dupont@exemple.com" required />
          <p class="errorMessage"><?= (isset($error['errorMail'])) ? $error['errorMail'] : ''; ?></p>
          <p class="errorMessage"><?= (isset($error['errorMailChecking'])) ? $error['errorMailChecking'] : ''; ?></p>
        </li>


        <?php if (!empty($phoneNumber)): ?>

        <li class="font-weight-bolder text-white"><label for="phoneNumber">Numéro de téléphone : </label> <input
            class="inputInscription <?php echo (isset($_POST['phoneNumber']) && !preg_match($regexPhone, $_POST['phoneNumber']))? 'red':'';  ?>"
            value="<?= ($_SESSION['userInfos'][0]['phoneNumber']) ?>" type="tel" id="phoneNumber" name="phoneNumber"
            placeholder=" 06.xx.xx.xx.xx " />
          <p class="errorMessage"><?= (isset($error['errorPhone'])) ? $error['errorPhone'] : ''; ?></p>
        </li>

        <?php else: ?>

        <li class="font-weight-bolder text-white"><label for="phoneNumber">Ajouter un numéro de téléphone : </label>
          <input
            class="inputInscription <?php echo (isset($_POST['phoneNumber']) && !preg_match($regexPhone, $_POST['phoneNumber']))? 'red':'';  ?>"
            type="tel" id="phoneNumber" name="phoneNumber" placeholder=" 06.xx.xx.xx.xx " />
          <p class="errorMessage"><?= (isset($error['errorPhone'])) ? $error['errorPhone'] : ''; ?></p>
        </li>

        <?php endif; ?>



      </ul>
    </fieldset>

    <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>3. Identifiants de
        connexion</strong><br /><br /></h5>
    <fieldset>
      <ul>

        <li class="font-weight-bolder text-white"><label for="userLog"><I>Identifiant : </I>
            <?= ($_SESSION['userInfos'][0]['userLog']) ?></label></li>

        <li class="font-weight-bolder text-white">
          <button type="button" class="badge badge-secondary" id="updateUserLog">Changer l'identifiant</button>
        </li>

        <div id="newUserLog">

          <span class="font-weight-bolder text-white"><label for="passwordConnect">Mot de passe actuel </label><br />
            <input
              class="<?php echo (isset($_POST['passwordConnect']) && !preg_match($regexPassword, $_POST['passwordConnect']))? 'red':'';  ?>"
              value="<?= $_POST['passwordConnect']?>" type="password" name="passwordConnect" id="passwordConnect"
              placeholder="Mot de passe" /> <small class="text-white"><br /><i>Renseignez votre mot de passe pour
                confirmer l'action.</i></small>
            <p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?> </p>
            <p class="errorMessage"><?= (isset($error['errorCheckPassword'])) ? $error['errorCheckPassword'] : ''; ?>
            </p>
          </span>

          <span class="font-weight-bolder text-white"><label for="userLog">Nouvel identifiant </label><br />
            <input
              class="inputInscription <?php echo (isset($_POST['userLog']) && !preg_match($regexLogin, $_POST['userLog']))? 'red':'';  ?>"
              value="<?= ($_SESSION['userInfos'][0]['userLog']) ?>" type="text" name="userLog" id="userLog" placeholder="Pseudo" /><small
              class="text-white"><br /><i>Vous pouvez tout simplement choisir votre adresse mail.</i></small>
            <p class="errorMessage"><?= (isset($error['errorLogin'])) ? $error['errorLogin'] : ''; ?></p><p class="errorMessage"><?= (isset($error['errorUserLogChecking'])) ? $error['errorUserLogChecking'] : ''; ?></p>
          </span>

        </div>




        <li class="font-weight-bolder text-white">
          <button type="button" class="badge badge-secondary" id="updatePassword">Changer le mot de passe</button>
        </li>

        <div id="newPassword">

          <span class="font-weight-bolder text-white"><label for="passwordConnect">Mot de passe actuel </label><br />
            <input
              class="<?php echo (isset($_POST['passwordConnect']) && !preg_match($regexPassword, $_POST['passwordConnect']))? 'red':'';  ?>"
              value="<?= $_POST['passwordConnect']?>" type="password" name="passwordConnect" id="passwordConnect"
              placeholder="Mot de passe" /> <small class="text-white"><br /><i>Renseignez votre mot de passe pour
                confirmer l'action.</i></small>
            <p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?> </p>
            <p class="errorMessage"><?= (isset($error['errorCheckPassword'])) ? $error['errorCheckPassword'] : ''; ?>
            </p>
          </span>



          <span class="font-weight-bolder text-white"><label for="passwordConnect">Nouveau mot de passe </label><br />
            <input
              class="inputInscription <?php echo (isset($_POST['password']) && !preg_match($regexPassword, $_POST['password']))? 'red':'';  ?>"
              value="<?= $_POST['password']?>" type="password" name="password" id="password" />
            <p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p>
          </span>


          <span class="font-weight-bolder text-white"><label for="confirmPassword"><i>Confirmation * </i></label><br />
            <input
              class="inputInscription <?php echo (isset($_POST['confirmPassword']) && !preg_match($regexPassword, $_POST['confirmPassword']))? 'red':'';  ?>"
              value="<?= $_POST['confirmPassword']?>" type="password" name="confirmPassword" id="confirmPassword" />
            <p class="card-text"><small class="text-white"><i>Entre 8 et 15 caractères, contenant au moins une minuscule
                  et une majuscule, un chiffre et un caractère spécial.</i></small></p>
            <p class="errorMessage">
              <?= (isset($error['errorConfirmPassword'])) ? $error['errorConfirmPassword'] : ''; ?></p>
          </span>

        </div>

      </ul>

    </fieldset>

    <h5 for="statut" class="card-title font-weight-bolder text-white"><strong>4. Statut </strong><br /><br /></h5>
    <fieldset>
      <ul>


        <?php if (isset($_SESSION['userInfos'][0]['status'])): ?>
        <li class="font-weight-bolder text-white"><label for="status"><i>Rang : </i><?= ($_SESSION['userInfos'][0]['status']) ?></label></li>


        <div id="status">
          <span class="font-weight-bolder text-white">
            <label for="status">Modifier : </label>

            <input type="radio" id="élève" name="status" value="élève">
            <label for="élève">Élève</label>

            <input type="radio" id="maître" name="status" value="maître">
            <label for="maître">Maître</label>

            <input type="radio" id="maître_et_élève" name="status" value="maître et élève">
            <label for="maître et élève">Maître et élève</label>
            </span>
            <p><small class="text-white"><i>Cliquez pour afficher et modifier</i></small></p>
        </div>

        <?php else: ?>

        <div id="status">
          <li class="font-weight-bolder text-white">
            <label for="status">Choisir un rang : </label>

            <input type="radio" id="élève" name="status" value="élève">
            <label for="élève">Élève</label>

            <input type="radio" id="maître" name="status" value="maître">
            <label for="maître">Maître</label>

            <input type="radio" id="maître_et_élève" name="status" value="maître et élève">
            <label for="maître et élève">Maître et élève</label>

          </li>
        </div>

        <?php endif; ?>




        <div id="studentCourse">

          <?php if (isset($_SESSION['userInfos'][0]['studentCourse'])): ?>
          <li class="font-weight-bolder text-white"><label for="studentCourse"><i>Discipline (élève) : </i>
              <?= ($_SESSION['userInfos'][0]['studentCourse']) ?></label></li>


          <span class="font-weight-bolder text-white"><label for="studentCourse">Modifier : </label>
            <select name="studentCourse" class="inputInscription">
              <option value="" selected disabled>Discipline (élève)</option>
              <option value="Kung-Fu">Kung-Fu</option>
              <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
              <option value="Sanda & Shoubo">Sanda & Shoubo</option>
            </select></span>


          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="studentCourse">Ajouter une discipline (élève) : </label>
            <select name="studentCourse" class="inputInscription">
              <option value="" selected disabled>Choisissez</option>
              <option value="Kung-Fu">Kung-Fu</option>
              <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
              <option value="Sanda & Shoubo">Sanda & Shoubo</option>
            </select></li>

          <?php endif; ?>

        </div>


        <div id="teacherCourse">

          <?php if (isset($_SESSION['userInfos'][0]['teacherCourse'])): ?>
          <li class="font-weight-bolder text-white"><label for="teacherCourse"><i>Cours (maître) : </i>
              <?= ($_SESSION['userInfos'][0]['teacherCourse']) ?></label></li>


          <span class="font-weight-bolder text-white"><label for="teacherCourse">Modifier : </label>
            <select name="teacherCourse" class="inputInscription">
              <option value="" selected disabled>Cours (maître)</option>
              <option value="Kung-Fu">Kung-Fu</option>
              <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
              <option value="Sanda & Shoubo">Sanda & Shoubo</option>
            </select></span>

          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="teacherCourse">Ajouter un cours (maître) : </label>
            <select name="teacherCourse" class="inputInscription">
              <option value="" selected disabled>Choisissez</option>
              <option value="Kung-Fu">Kung-Fu</option>
              <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
              <option value="Sanda & Shoubo">Sanda & Shoubo</option>
            </select></li>

          <?php endif; ?>

        </div>


        <div id="groupAge">

          <?php if (isset($_SESSION['userInfos'][0]['groupAge'])): ?>
          <li class="font-weight-bolder text-white">
            <label for="groupAge"><i>Groupe : </i> <?= ($_SESSION['userInfos'][0]['groupAge']) ?></label></li>


          <span class="font-weight-bolder text-white">
            <label for="groupAge">Modifier : </label>

            <input type="radio" id="Enfants" name="groupAge" value="Enfants">
            <label for="Enfants">Enfants</label>

            <input type="radio" id="Ados" name="groupAge" value="Ados">
            <label for="Ados">Ados</label>

            <input type="radio" id="Adultes" name="groupAge" value="Adultes">
            <label for="Adultes">Adultes</label>


          </span>

          <?php else: ?>

          <li class="font-weight-bolder text-white">
            <label for="groupAge">Ajouter un groupe : </label>

            <input type="radio" id="Enfants" name="groupAge" value="Enfants">
            <label for="Enfants">Enfants</label>

            <input type="radio" id="Ados" name="groupAge" value="Ados">
            <label for="Ados">Ados</label>

            <input type="radio" id="Adultes" name="groupAge" value="Adultes">
            <label for="Adultes">Adultes</label>

            <?php endif; ?>

        </div>



        <div id="studentYear">

          <?php if (isset($_SESSION['userInfos'][0]['studentYear'])): ?>
          <li class="font-weight-bolder text-white">
            <label for="studentYear"><i>Année : </i> <?= ($_SESSION['userInfos'][0]['studentYear']) ?></label></li>


          <span class="font-weight-bolder text-white"><label for="studentYear">Modifier : </label>
            <select name="studentYear" id="studentYear" class="inputInscription">
              <option value="" selected disabled>Année</option>
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
            </select></span>

          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="studentYear">Ajouter l'année : </label>
            <select name="studentYear" id="studentYear" class="inputInscription">
              <option value="" selected disabled>Année</option>
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

          <?php endif; ?>

        </div>


        <div id="childBelt">

          <?php if (isset($_SESSION['userInfos'][0]['childBelt'])): ?>
          <li class="font-weight-bolder text-white">
            <label for="childBelt"><i>Ceinture : </i> <?= ($_SESSION['userInfos'][0]['childBelt']) ?></label></li>


          <span class="font-weight-bolder text-white"><label for="childBelt">Modifier : </label>
            <select name="childBelt" class="inputInscription">
              <option value="" selected disabled>Ceinture</option>

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

            </select></span>

          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="childBelt">Ajouter une ceinture : </label>
            <select name="childBelt" class="inputInscription">
              <option value="" selected disabled>Ceinture</option>

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

          <?php endif; ?>
        </div>





        <div id="studentBelt">

          <?php if (isset($_SESSION['userInfos'][0]['studentBelt'])): ?>
          <li class="font-weight-bolder text-white">
            <label for="studentBelt"><i>Ceinture : </i> <?= ($_SESSION['userInfos'][0]['studentBelt']) ?></label></li>


          <span class="font-weight-bolder text-white"><label for="studentBelt">Modifier : </label>
            <select name="studentBelt" class="inputInscription">
              <option value="" selected disabled>Ceinture</option>
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
            </select></span>

          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="studentBelt">Ajouter une ceinture : </label>
            <select name="studentBelt" class="inputInscription">
              <option value="" selected disabled>Ceinture</option>
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

          <?php endif; ?>

        </div>


        <div id="teacherRank">

          <?php if (isset($_SESSION['userInfos'][0]['teacherRank'])): ?>
          <li class="font-weight-bolder text-white">
            <label for="teacherRank"><i>Grade : </i> <?= ($_SESSION['userInfos'][0]['teacherRank']) ?></label></li>


          <span class="font-weight-bolder text-white"><label for="teacherRank">Modifier : </label>
            <select name="teacherRank" class="inputInscription">
              <option value="" selected disabled>Grade</option>
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
          </span>

          <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="teacherRank">Ajouter un grade : </label>
            <select name="teacherRank" class="inputInscription">
              <option value="" selected disabled>Grade</option>
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

          <?php endif; ?>
        </div>




        <div>

          <?php if ((!empty($presentation)) || (isset($_SESSION['userInfos'][0]['presentation']))): ?>
          <p class="font-weight-bolder text-white">
            <label for="presentation"><i>Présentation : </i> </label></p>
          <textarea id="presentation" name="presentation" rows="5" cols="33" maxlength="518">
<?= ($_SESSION['userInfos'][0]['presentation']) ?>
</textarea>


          <p class="font-weight-bolder text-white text-justify"><label for="presentation"><br /><br />Modifier votre
              présentation : </label></p>
          <!--Pour le maxlenght du textarea, il ne commence qu'à 18 caractères. Il faut donc mettre le nombre souhaité +18-->
          <textarea id="presentation" class="mx-auto" name="presentation" rows="5" cols="33" maxlength="518">

                </textarea>
          <p class="card-text"><small class="text-white"><i>Max. 500 caractères</i></small></p>

          <?php else: ?>

          <p class="font-weight-bolder text-white text-justify"><label for="presentation"><br /><br />Un slogan, une
              citation préférée, ou tout simplement votre parcours dans les arts martiaux ? Dites-nous en plus !</label>
          </p>
          <!--Pour le maxlenght du textarea, il ne commence qu'à 18 caractères. Il faut donc mettre le nombre souhaité +18-->
          <textarea id="presentation" name="presentation" rows="5" cols="33" maxlength="518">

                </textarea>
          <p class="card-text"><small class="text-white"><i>Max. 500 caractères</i></small></p>

          <?php endif; ?>
        </div>

      </ul>


      <label for="checkForm" class="text-white">Je certifie sur l'honneur l'exactitude des informations<br />
        renseignées ci-dessus.</label>
      <input type="checkbox" id="checkForm" name="checkForm" value="checkForm" checked required>


      <p><br /><button id="modifRequest" type="submit" name="modifRequest" class="float-right rounded">Enregistrer les
          modifications</button></p>

    </fieldset>
  </div>
  </div>

</form>


<?php
include '../templates/footer.php';
include '../templates/AlertInscription.php';