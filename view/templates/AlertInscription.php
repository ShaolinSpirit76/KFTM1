<?php
// Alerts d'inscription
if(isset($success) && $success == true){
  ?>
        <script>
        Swal.fire(
          'Bien joué !',
          'Ton inscription a bien été enregistrée !',
          'success'
        );
        setTimeout(function(){
           document.location.href = "../../index.php"; 
        }, 6000);
        </script>
        <?php
}
if(isset($oups) && $oups == true){
  ?>
        <script>
  Swal.fire({
  title: 'Oups !',
  text: 'Il doit y avoir une erreur dans ton formulaire... :(',
  type: 'error',
  confirmButtonText: 'Ok'
});
setTimeout(function(){
      
    }, 6000);
</script>
        <?php
}
// Fin alerts d'inscription

