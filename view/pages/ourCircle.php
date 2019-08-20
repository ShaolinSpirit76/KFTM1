<?php
require_once '../../controller/ourCircleController.php';
include '../templates/head.php';
include '../../controller/regex.php';
?>





<div class="container-fluid">
  <div class="row">
<?php foreach($displayUsersResult as $displayUser){?>
<?php if ($displayUser['teacherRank'] === 'Sifu'): ?>






  <div class="col-md-4 col-sm-12 mx-auto">
      <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <img src="../form/miniatures/<?=$displayUser['picture'];?>" class="card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary mx-auto" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>



    
  <?php endif; 
  } ?>
</div>
</div>





















<div class="container-fluid">
  <div class="row">
<?php foreach($displayUsersResult as $displayUser){?>
  <?php if ($displayUser['teacherRank'] === 'Tailaoshe'): ?>

  


  



  <div class="col-md-4 col-sm-12 mx-auto">
      <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <img src="../form/miniatures/<?=$displayUser['picture'];?>" class="card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>
    



                
  <?php endif; 
   }?>   
</div>
</div>





















<div class="container-fluid">
  <div class="row">
<?php foreach($displayUsersResult as $displayUser){?>
  <?php if ($displayUser['teacherRank'] === 'Laoshe'): ?>


  



  <div class="col-md-4 col-sm-12 mx-auto">
        <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <img src="../form/miniatures/<?=$displayUser['picture'];?>" class="card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>
    



                
  <?php endif; 
  }?>   
</div>
</div>




















<div class="container-fluid">
  <div class="row">
<?php foreach($displayUsersResult as $displayUser){?>
  <?php if ($displayUser['teacherRank'] === 'Taïjiaoshe'): ?>


  



  <div class="col-md-4 col-sm-12 mx-auto">
      <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <img src="../form/miniatures/<?=$displayUser['picture'];?>" class="card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>
    



                
  <?php endif; 
  }?>   
</div>
</div>
























<div class="container-fluid">
  <div class="row">
<?php foreach($displayUsersResult as $displayUser){?>
  <?php if ($displayUser['teacherRank'] === 'Jiaoshe'): ?>


  



  <div class="col-md-4 col-sm-12 mx-auto">
       <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <img src="../form/miniatures/<?=$displayUser['picture'];?>" class="card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>
    



                
  <?php endif; 
  }?> 
</div>
</div>
































<div class="container-fluid">
  <div class="row">



<?php foreach($displayUsersResult as $displayUser){?>
  <?php if ($displayUser['teacherRank'] === 'Sibak'): ?>


  <div class="col-md-4 col-sm-12 mx-auto">

      <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <img src="../form/miniatures/<?=$displayUser['picture'];?>" class="card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>
    



                
  <?php endif; 
  }?>      
  </div>
</div>
  












<div class="container-fluid">
  <div class="row">



<?php foreach($displayUsersResult as $displayUser){?>
  <?php if ($displayUser['status'] === 'élève'): ?>


  <div class="col-md-4 col-sm-12 mx-auto">

      <div class="card mx-auto" style="width: 18rem;">

      <?php if (isset($displayUser['picture'])): ?>
      <div class="mx-auto text-center">
      <img src="../form/miniatures/<?=$displayUser['picture'];?>"  style="width: 18rem; height: 16rem;" class="pictureSize card-img-top img-fluid" alt="Photo de profil <?=$displayUser['picture'];?>">
</div>
      <?php endif; ?>

      <div class="card-body mx-auto">

    <h5 class="card-title"> <?=$displayUser['firstName']?> <?=$displayUser['lastName']?></h5>
    <p class="card-text text-center"><?=ucfirst($displayUser['status'])?></p>
    <a class="btn btn-primary" data-toggle="collapse" href="#<?=$displayUser['lastName']?><?=$displayUser['ID']?>" role="button" aria-expanded="false" aria-controls="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">En savoir plus</a>
    
        <div class="collapse" id="<?=$displayUser['lastName']?><?=$displayUser['ID']?>">
  <div class="card card-body">

  <?php if (isset($_SESSION['userInfos'][0]['mail']) && ($_SESSION['userInfos'][0]['mail']) === 'levray.jm@wanadoo.fr'):?>

<?php if (isset($displayUser['phoneNumber'])): ?>
  <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
  <?php endif; ?>                  
                  
  <p class="text-white">Login : <?= $displayUser['userLog']?> </p>

  <?php endif; ?> 


  <?php if(isset($_SESSION['connection']) && $_SESSION['connection'] == true ):?>

  <?php if (isset($displayUser['birthDate'])): ?>
  <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
  <?php endif; ?>

    <p class="text-white">Mail : <?=$displayUser['mail']?> </p>

  <?php endif; ?>
  

  <?php if (isset($displayUser['studentCourse'])): ?>
  <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
  <?php endif; ?>

  <?php if (isset($displayUser['teacherCourse'])): ?>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <?php endif; ?>

  <?php if (isset($displayUser['groupAge'])): ?>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentYear'])): ?>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['childBelt'])): ?>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['studentdBelt'])): ?>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['teacherRank'])): ?>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <?php endif; ?>

                   <?php if (isset($displayUser['presentation'])): ?>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <?php endif; ?>

  </div>
</div>


  </div>
</div>

       
</div>
    



                
  <?php endif; 
  }?>      
  </div>
</div>













               





                
 

<?php
include '../templates/footer.php';
