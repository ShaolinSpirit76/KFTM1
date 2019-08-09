<?php
// Alerts d'inscription
if(isset($success) && $success == true){
  ?>
        <script>
        Swal.fire(
          'Bien joué !',
          'Votre inscription a bien été enregistrée :)',
          'success'
        );
        setTimeout(function(){
           document.location.href = "../../index.php"; 
        }, 5000);
        </script>
        <?php
}



if(isset($swalErrorForm) && $swalErrorForm == true){
  ?>
        <script>
  Swal.fire({
  title: 'Oups !',
  text: 'Il doit y avoir une erreur dans votre formulaire... :(',
  type: 'error',
  confirmButtonText: 'Ok'
});
setTimeout(function(){
      
    }, 5000);
</script>
        <?php
}
// Fin alerts d'inscription



// Alert de mise à jour du profil
if(isset($updateSuccess) && $updateSuccess == true){
  ?>
        <script>
        Swal.fire(
          'Bien joué !',
          'Votre profil a bien été mis à jour ;)',
          'success'
        );
        setTimeout(function(){
           document.location.href = "../pages/ourCircle.php"; 
           <?php
           session_destroy();
           ?>
        }, 4000);
        </script>
        <?php
}