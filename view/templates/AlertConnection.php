<?php
// Alerts de connexion
if(isset($connectionSuccess) && $connectionSuccess == true){
  ?>
        <script>
        Swal.fire(
          'Bonjour <?= $_SESSION['userInfos'][0]['firstName'] ?> !',
          'Ravi de te revoir...',
          'success'
        );
        setTimeout(function(){
           document.location.href = "../../index.php"; 
        }, 2000);
        </script>
        <?php
}
if(isset($connectionFailed) && $connectionFailed == true){
  ?>
        <script>
  Swal.fire({
  title: 'Oups !',
  text: 'L\'identifiant semble incorrect... :(',
  type: 'error',
  confirmButtonText: 'Ok'
});
setTimeout(function(){
      
    }, 6000);
</script>
        <?php
}
if(isset($mdpFailed) && $mdpFailed == true){
  ?>
        <script>
  Swal.fire({
  title: 'Oups !',
  text: 'Le mot de passe semble incorrect... :(',
  type: 'error',
  confirmButtonText: 'Ok'
});
setTimeout(function(){
      
    }, 6000);
</script>
        <?php
}
// Fin alerts connexion
