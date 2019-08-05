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

          <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>1. Identité</strong><br /><br /></h5>
    
              <ul>
              
              <li class="font-weight-bolder text-white"><label for="newLastName">Nom : </label> <input title="Cliquez pour modifier" class="inputInscription <?php echo (isset($_POST['newLastName']) && !preg_match($regexName, $_POST['newLastName']))? 'red':'';  ?>" value="<?= $_POST['newLastName']?>" id="newLastName" type="text" name="newLastName" placeholder="<?= $_SESSION['userInfos'][0]['lastName'] ?>" /><p class="errorMessage"><?= (isset($error['errorLastName'])) ? $error['errorLastName'] : ''; ?></p></li>

                 <li class="font-weight-bolder text-white"><label for="newFirstName">Prénom : </label> <input title="Cliquez pour modifier" class="inputInscription <?php echo (isset($_POST['newFirstName']) && !preg_match($regexName, $_POST['newFirstName']))? 'red':'';  ?>" value="<?= $_POST['newFirstName']?>" id="newFirstName" type="text" name="newFirstName" placeholder="<?= $_SESSION['userInfos'][0]['firstName'] ?>" /><p class="errorMessage"><?= (isset($error['errorFirstName'])) ? $error['errorFirstName'] : ''; ?></p></li>


                 <?php if (isset($_SESSION['userInfos'][0]['birthDate'])): ?>

                 <li class="font-weight-bolder text-white"><label for="newBirthDate">Date de naissance : </label> <input title="Cliquez pour modifier" class="inputInscription <?php echo (isset($_POST['newBirthDate']) && !preg_match($regexDate, date('d/m/Y',strtotime($_POST['newBirthDate']) )))? 'red':'';  ?>" value="<?= $_POST['newBirthDate']?>" type="date" name="newBirthDate" id="newBirthDate" placeholder="<?= $_SESSION['userInfos'][0]['birthDate'] ?>"  /><p class="errorMessage"><?= (isset($error['errorBirthDate'])) ? $error['errorBirthDate'] : ''; ?></p></li>

                 <?php else: ?>

          <li class="font-weight-bolder text-white"><label for="newBirthDate">Ajouter ma date de naissance : </label>
            <input
              class="inputInscription <?php echo (isset($_POST['newBirthDate']) && !preg_match($regexDate, date('d/m/Y',strtotime($_POST['newBirthDate']) )))? 'red':'';  ?>"
              value="<?= $_POST['newBirthDate']?>" type="date" name="newBirthDate" id="newBirthDate" placeholder="jj/mm/aaaa" />
            <p class="errorMessage"><?= (isset($error['errorBirthDate'])) ? $error['errorBirthDate'] : ''; ?></p>
          </li>

          <?php endif; ?>



                 
          <?php if (!empty($picture)): ?>

<li class="font-weight-bolder text-white"><label for="picture">Photo de profil :
    <?= ($_SESSION['userInfos'][0]['picture']) ?></label> <button type="button" class="badge badge-secondary"
    id="updatePicture">Changer ma photo de profil</button>

      <?php else: ?>

<li class="font-weight-bolder text-white"><label for="newPicture">Ajouter une photo de profil : </label> <input
type="file" name="newPicture" id="newPicture" accept="image/*" />
<small class="text-white"><br /><i>De préférence un .jpg</i></small></li>

<?php endif; ?>

<div id="newPic">

<span class="font-weight-bolder text-white"><label for="newPicture">Nouvelle photo de profil : </label> <input
    type="file" name="newPicture" id="newPicture" value="<?= $_POST['newPicture']?>" accept="image/*" />
  <small class="text-white"><br /><i>De préférence un .jpg</i></small></span>

</div>

</ul>
</fieldset>




                 <h5 for="contactInformation" class="card-title font-weight-bolder text-white"><strong>2. Coordonnées</strong><br /><br /></h5>

                 <fieldset>
                 <ul>

                 <li class="font-weight-bolder text-white"><label for="newMail">Adresse mail : </label> <input title="Cliquez pour modifier" class="inputInscription <?php echo (isset($_POST['newMail']) && !preg_match($regexMail, $_POST['newMail']))? 'red':'';  ?>" type="text" id="newMail" name="newMail" placeholder="<?= $_SESSION['userInfos'][0]['mail'] ?>" value="<?= $_POST['newMail']?>" /><p class="errorMessage"><?= (isset($error['errorMail'])) ? $error['errorMail'] : ''; ?></p><p class="errorMessage"><?= (isset($error['errorMailChecking'])) ? $error['errorMailChecking'] : ''; ?></p></li>



                 <?php if (!empty($phoneNumber)): ?>

<li class="font-weight-bolder text-white"><label for="newPhoneNumber">Numéro de téléphone : </label> <input title="Cliquez pour modifier"
    class="inputInscription <?php echo (isset($_POST['newPhoneNumber']) && !preg_match($regexPhone, $_POST['newPhoneNumber']))? 'red':'';  ?>"
    value="<?= $_POST['newPhoneNumber']?>" type="tel" id="newPhoneNumber" name="newPhoneNumber"
    placeholder="<?= ($_SESSION['userInfos'][0]['phoneNumber']) ?>" />
  <p class="errorMessage"><?= (isset($error['errorPhone'])) ? $error['errorPhone'] : ''; ?></p>
</li>

<?php else: ?>

<li class="font-weight-bolder text-white"><label for="newPhoneNumber">Ajouter un numéro de téléphone : </label>
  <input
    class="inputInscription <?php echo (isset($_POST['newPhoneNumber']) && !preg_match($regexPhone, $_POST['newPhoneNumber']))? 'red':'';  ?>"
    type="tel" id="newPhoneNumber" name="newPhoneNumber" placeholder=" 06.xx.xx.xx.xx " value="<?= $_POST['newPhoneNumber']?>" />
  <p class="errorMessage"><?= (isset($error['errorPhone'])) ? $error['errorPhone'] : ''; ?></p>
</li>

<?php endif; ?>

</ul>
</fieldset>




            <h5 for="Identity" class="card-title font-weight-bolder text-white"><strong>3. Identifiants de connexion</strong><br /><br /></h5>
<fieldset>
            <ul>

            
            <li class="font-weight-bolder text-white"><label for="userLog"><I>Identifiant : </I>
            <?= ($_SESSION['userInfos'][0]['userLog']) ?></label></li>

        <li class="font-weight-bolder text-white">
          <button type="button" id="updateID" class="badge badge-secondary" data-toggle="modal" data-target="#verification">Changer l'identifiant et/ou le mot de passe</button>
        </li>

        <div id="newID">

          <span class="font-weight-bolder text-white"><label for="newUserLog">Nouvel identifiant </label><br />
            <input
              class="inputInscription <?php echo (isset($_POST['newUserLog']) && !preg_match($regexLogin, $_POST['newUserLog']))? 'red':'';  ?>"
              value="<?= $_POST['newUserLog'] ?>" type="text" name="newUserLog" id="newUserLog" placeholder="Pseudo ou mail" /><small
              class="text-white"><br /><i>Vous pouvez tout simplement choisir votre adresse mail.</i></small>
            <p class="errorMessage"><?= (isset($error['errorLogin'])) ? $error['errorLogin'] : ''; ?></p><p class="errorMessage"><?= (isset($error['errorUserLogChecking'])) ? $error['errorUserLogChecking'] : ''; ?></p>
          </span>

                 <span class="font-weight-bolder text-white"><label for="newPassword">Nouveau mot de passe </label><br />
            <input
              class="inputInscription <?php echo (isset($_POST['newPassword']) && !preg_match($regexPassword, $_POST['newPassword']))? 'red':'';  ?>"
              value="<?= $_POST['newPassword']?>" type="password" name="newPassword" id="newPassword" />
            <p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p>
          </span>


          <span class="font-weight-bolder text-white"><label for="newConfirmPassword"><i>Confirmation * </i></label><br />
            <input
              class="inputInscription <?php echo (isset($_POST['newConfirmPassword']) && !preg_match($regexPassword, $_POST['newConfirmPassword']))? 'red':'';  ?>"
              value="<?= $_POST['newConfirmPassword']?>" type="password" name="newConfirmPassword" id="newConfirmPassword" />
            <p class="card-text"><small class="text-white"><i>Entre 8 et 15 caractères, contenant au moins une minuscule
                  et une majuscule, un chiffre et un caractère spécial.</i></small></p>
            <p class="errorMessage">
              <?= (isset($error['errorConfirmPassword'])) ? $error['errorConfirmPassword'] : ''; ?></p>
          </span>

        </div>

                </ul>

            </fieldset>



            

          <h5 for="statut" class="card-title font-weight-bolder text-white"><strong>4. Statut  </strong><br /><br /></h5>
<fieldset>
            <ul>

    <div id="status">
<li class="font-weight-bolder text-white"> 
<label for="status">Rang : </label>

  <input type="radio" id="élève" name="status" value="élève">
  <label for="élève">Élève</label>

  <input type="radio" id="maître" name="status" value="maître">
  <label for="maître">Maître</label>

  <input type="radio" id="maître_et_élève" name="status" value="maître et élève">
  <label for="maître et élève">Maître et élève</label>
 
</li>
</div>



<div id="studentCourse">
            <li class="font-weight-bolder text-white"><label for="studentCourse">Discipline (élève) : </label>
            <select name="studentCourse" class="inputInscription">
            <option value="" selected disabled>Choisissez</option>
                <option value="Kung-Fu">Kung-Fu</option> 
                <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
                <option value="Sanda & Shoubo">Sanda & Shoubo</option>
</select></li>
</div>

<div id="teacherCourse">
            <li class="font-weight-bolder text-white"><label for="teacherCourse">Cours (maître) : </label>
            <select name="teacherCourse" class="inputInscription">
            <option value="" selected disabled>Choisissez</option>
                <option value="Kung-Fu">Kung-Fu</option> 
                <option value="Taïchi Chuan & Qi Gong">Taïchi Chuan & Qi Gong</option>
                <option value="Sanda & Shoubo">Sanda & Shoubo</option>
</select></li>
</div>

<div id="groupAge">
<li class="font-weight-bolder text-white"> 
<label for="groupAge">Groupe : </label>

  <input type="radio" id="Enfants" name="groupAge" value="Enfants">
  <label for="Enfants">Enfants</label>

  <input type="radio" id="Ados" name="groupAge" value="Ados">
  <label for="Ados">Ados</label>

  <input type="radio" id="Adultes" name="groupAge" value="Adultes">
  <label for="Adultes">Adultes</label>
    
            
            </li>
</div>


<div id="studentYear">
<li class="font-weight-bolder text-white"><label for="studentYear">Année : </label>
            <select name="studentYear" id="studentYear" class="inputInscription">
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
            <select name="childBelt" class="inputInscription">
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
            <select name="studentBelt" class="inputInscription">
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
            <select name="teacherRank" class="inputInscription">
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

<div>
<p class="font-weight-bolder text-white text-justify"><label for="presentation"><br /><br />Un slogan, une citation préférée, ou tout simplement votre parcours dans les arts martiaux ? Dites-nous en plus !</label></p> <!--Pour le maxlenght du textarea, il ne commence qu'à 18 caractères. Il faut donc mettre le nombre souhaité +18-->
                <textarea id="presentation" name="presentation" rows="5" cols="33" maxlength="518">

                </textarea>
                <p class="card-text"><small class="text-white"><i>Max. 500 caractères</i></small></p>
</div>

</ul>


<label for="checkForm" class="text-white">Je certifie sur l'honneur l'exactitude des informations<br /> renseignées ci-dessus.</label>
<input type="checkbox" id="checkForm" name="checkForm" value="checkForm" required>


<p><br /><button id="submitInscriptionForm" type="submit" name="submitInscriptionForm" class="float-right rounded">Valider</button></p>

</fieldset>
          </div>
</div>

</form>


































           <!-- Début modal sécurité pour la suppression -->

<div id="countDelete" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-white" style="background-color:black;">
        <h5 class="modal-title">Action irréversible</h5>
        <button type="button" id="crossBackDelete" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<!-- action : permet de désigner la page actuelle -->
<form name="deleteForm" method="POST" action="<?php $_SERVER['REQUEST_URI']; ?>">
  <div class="text-center">

  <span><label for="passwordConnect">Mot de passe </label><br /> <input class="<?php echo (isset($_POST['passwordConnect']) && !preg_match($regexPassword, $_POST['passwordConnect']))? 'red':'';  ?>" value="<?= $_POST['passwordConnect']?>" type="password" name="passwordConnect" id="passwordConnect" placeholder="Mot de passe" /><small class="text-muted"><br />Renseigné lors de votre inscription.</small><p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p></span>

  <p><button type="button" id="backDelete" class="btn btn-secondary"data-dismiss="modal">Retour</button>
  <button id="deleteRequest" name="deleteRequest" class="yellow-hover btn btn-primary text-white">Confirmer la suppression</button><br /></p>
</form>
</div>
<div class="modal-footer" style="background-color:#282828;">
<p><small class="text-white"><i>Vous vous apprétez à supprimer définitivement votre compte. Il vous sera bien sûr possible par la suite de vous réinscrire si vous le désirez, mais toutes les données relatives à ce compte seront perdues.</i></small></p>
        </div>
    </div>
    </div>
</div>

<!-- Fin modal sécurité pour la suppression -->



    </fieldset>
  </div>
  </div>

</form>










<!-- Début modal vérification de sécurité -->

<div class="modal fade" id="verification" tabindex="-1" role="dialog" aria-labelledby="verificationLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-white" style="background-color:black;">
        <h5 class="modal-title">Vérification requise</h5>
        <button type="button" class="close text-white" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <!-- action : permet de désigner la page actuelle -->
<form name="secureForm" method="POST" action="<?php $_SERVER['REQUEST_URI']; ?>">
  <div class="text-center">

  <span><label for="passwordConnect">Mot de passe actuel </label><br /> <input class="<?php echo (isset($_POST['passwordConnect']) && !preg_match($regexPassword, $_POST['passwordConnect']))? 'red':'';  ?>" value="<?= $_POST['passwordConnect']?>" type="password" name="passwordConnect" id="passwordConnect" placeholder="Mot de passe" required/><small class="text-muted"><br />Renseigné lors de votre inscription.</small><p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p></span>

  <p><button type="button" class="btn btn-secondary" data-dismiss="modal">Retour</button>
  <button id="verificationButton" name="verificationButton" class="yellow-hover btn btn-primary text-white">M'authentifier</button><br /></p>
</form>
</div>

<div class="modal-footer" style="background-color:#282828;">
      <small class="text-white"><i>Vous vous apprétez à modifier des données sensibles. Par mesure de sécurité, nous préférons vous re-demander votre mot de passe actuel, afin de nous assurer que l'auteur de la demande est bien le détenteur du compte.</i></small>
        </div>
    </div>
    </div>
</div>

  <!-- Fin modal vérification de sécurité -->

  

<?php
include '../templates/footerAdmin.php';
include '../templates/AlertInscription.php';
include '../templates/AlertConnection.php';