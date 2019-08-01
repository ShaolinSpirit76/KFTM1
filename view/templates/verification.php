<?php
require '../../controller/verificationControllerStart.php';
include '../templates/head.php';
include '../../controller/regex.php';
require '../../controller/verificationController.php';
?>

<!-- Début modal vérification de sécurité -->

<div id="verification" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header text-white" style="background-color:black;">
        <h5 class="modal-title">Vérification requise</h5>
        <a href="../form/myAccount.php"><button type="button" class="close text-white" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button></a>
      </div>
      <div class="modal-body">
<form name="loginForm" method="POST" action="<?php $_SERVER['REQUEST_URI']; ?>">
  <div class="text-center">

  <span><label for="passwordConnect">Mot de passe actuel </label><br /> <input class="<?php echo (isset($_POST['passwordConnect']) && !preg_match($regexPassword, $_POST['passwordConnect']))? 'red':'';  ?>" value="<?= $_POST['passwordConnect']?>" type="password" name="passwordConnect" id="passwordConnect" placeholder="Mot de passe" required/><small class="text-muted"><br />Renseignés lors de votre inscription.</small><p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p></span>

  <a href="../form/myAccount.php"><button type="button" class="btn btn-secondary">Retour</button></a>
  <button id="loginButton" name="loginButton" type="submit" onclick="checkPasswordLogin();" class="yellow-hover btn btn-primary text-white">M'authentifier</button>
</form>
</div>

<div class="modal-footer" style="background-color:#282828;">
      
        </div>
    </div>
    </div>
</div>

  <!-- Fin modal vérification de sécurité -->

  <?php
require 'footerAdmin.php';
include 'AlertConnection.php';