<?php
include '../templates/head.php';
include '../../controller/regex.php';
include '../../controller/login.php';
require '../../controller/OurCircleController.php';

// Variables dynamiques pour la navbar à partir de pages
$home = '../../index.php';
$schoolDoors = 'schoolDoors.php';
$news = 'news.php';
$kungfu = 'kungfu.php';
$taichi = 'taichi.php';
$sanda = 'sanda.php';
$ourCircle = 'ourCircle.php';
$pictures = 'pictures.php';
$video = 'video.php';
$techniques = 'techniques.php';
$otherSchools = 'otherSchools.php';
$contact = '../form/contact.php';
$shop = 'shop.php';
$connexion = '../form/connexion.php';
$myAccount = '../form/myAccount.php';
$checkCalendar = '../form/checkCalendar.php';

include '../templates/navbar.php';
?>





                    
<div class="container-fluid">
  <div class="row">
  <?php foreach($displayUsersResult as $displayUser){?>
  <div class="col-md-4 col-sm-12 mx-auto">
      <div class="card" style="width: 18rem;">
        <div class="card-header mx-auto">
                   <p class="text-white">Nom : <?=$displayUser['lastName']?> </p>
                   <p class="text-white">Prénom : <?=$displayUser['firstName']?> </p>
                   <p class="text-white">Téléphone : <?=$displayUser['phoneNumber']?> </p>
                   <p class="text-white">Date de naissance : <?=strftime('%d/%m/%Y',strtotime($displayUser['birthDate']))?> </p>
                   <p class="text-white">Mail : <?=$displayUser['mail']?> </p>
                   <p class="text-white">Photo : <?= $displayUser['picture']?> </p>
                   <p class="text-white">Login : <?= $displayUser['login']?> </p>
                   <p class="text-white">Mot de passe : <?= $displayUser['password']?> </p>
                   <p class="text-white">Statut : <?= $displayUser['status']?> </p>
                   <p class="text-white">Cours en tant qu'élève : <?= $displayUser['studentCourse']?> </p>
                   <p class="text-white">Cours en tant que maître : <?= $displayUser['teacherCourse']?> </p>
                   <p class="text-white">Groupe : <?= $displayUser['groupAge']?> </p>
                   <p class="text-white">Année : <?= $displayUser['studentYear']?> </p>
                   <p class="text-white">Ceinture enfant : <?= $displayUser['childBelt']?> </p>
                   <p class="text-white">Ceinture adulte : <?= $displayUser['studentBelt']?> </p>
                   <p class="text-white">Grade : <?= $displayUser['teacherRank']?> </p>
                   <p class="text-white">Présentation : <?= $displayUser['presentation']?> </p>
                   <ul>
                   <li class="list-group-item">
            <div class="text-center"><a href="ourCircle.php?deleteId=<?= $donnees['id']; ?>"><button type="button"
                  class="btn btn-primary">Suppression</button></a></div>
          </li>
        </ul>
      </div>
</div>
    </div>
     <?php  } ?>
</div>
</div>
                
                                         
               

                


<?php
// Variables dynamiques pour la navbar à partir à partir de pages
$AssoInfos = '../mentions/AssoInfos.php';
$legalInfos = '../mentions/legalInfos.php';
$CGU = '../mentions/CGU.php';
$RGPD = '../mentions/RGPD.php';

  include '../templates/footer.php';
?>