<?php
include '../../controller/regex.php';
include '../../controller/login.php';
?>
<!-- Début navbar -->

<nav id="menu" class="navbar navbar-expand-lg">
     
     

      <div class="row w-100">
        <div class="collapse navbar-collapse">
          <div class="col-1">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <img src="../../assets/images/756974331.gif" class="img-fluid rounded-circle" alt="logo YinYang ThieuLam" width="100%" height="100%" />
              </li>
            </ul>
          </div>
          <div class="col-10">
            <ul class="justify-content-center align-items-center navbar-nav mx-auto">
              <li class="nav-item">
                <div class="home">
                  <a class="clickTop nav-link" href="<?= $home ?>"><img src="../../assets/images/yuuyake/iconfinder_Sensu_17594.png" alt="éventail" class="img-fluid" title="" width="100%" height="100%" /><br />Accueil</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="schoolDoors">
                  <a class="clickTop nav-link" href="<?= $schoolDoors ?>"><img src="../../assets/images/yuuyake/iconfinder_Firewall_17573.png" alt="portes chinoises" class="img-fluid" title="" width="100%" height="100%" /><br />Portes de l'école</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div class="news">
                  <a class="clickTop nav-link" href="<?= $news ?>"><img src="../../assets/images/yuuyake/iconfinder_Trash (Empty)_17596.png" alt="bol fumant" class="img-fluid" title="" width="100%" height="100%" /><br />Fil d'actualités</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="kungfu dropdown">
                <a style="background-color:black; color:white;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/yuuyake/iconfinder_My documents_17583.png" alt="dossiers" class="img-fluid" title="" width="85%" height="85%" /><span class="yellow-hover"><br />Nos disciplines</span></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?= $kungfu ?>">Kung Fu</a>
    <a class="dropdown-item" href="<?= $taichi ?>">Taïchi Chuan & Qi Gong</a>
    <a class="dropdown-item" href="<?= $sanda ?>">Sanda & Shoubo</a>
  </div>                 
              </li>
              <li class="nav-item">
                <div class="ourCircle">
                  <a class="clickTop nav-link" href="<?= $ourCircle ?>"><img src="../../assets/images/yuuyake/iconfinder_Ichat_17578.png" alt="panneau en bois" class="img-fluid" title="" width="100%" height="100%" /><br />Notre cercle</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="links dropdown">
                <a style="background-color:black; color:white;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><img src="../../assets/images/yuuyake/iconfinder_Photoshop_17588.png" alt="PS en calligraphie" class="img-fluid" title="" width="100%" height="100%" /><span class="yellow-hover"><br />Liens</span></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?= $pictures ?>">Photos</a>
    <a class="dropdown-item" href="<?= $video ?>">Vidéos</a>
    <a class="dropdown-item" href="<?= $techniques ?>">Cahiers techniques</a>
    <a class="dropdown-item" href="<?= $otherSchools ?>">Autres écoles</a>
    <a class="dropdown-item" href="<?= $contact ?>">Contact</a>
  </div>                       
             </li>
              <li class="nav-item">
                <div class="shop">
                  <a class="clickTop nav-link" href="<?= $shop ?>"><img src="../../assets/images/yuuyake/iconfinder_Services_17595.png" class="img-fluid spaceTop" alt="échoppe chinoise" title="" width="90%" height="90%" /><p class="spaceTop">Boutique</p></a>
                </div>
              </li>
              <li class="nav-item">
              <a href="#connection" data-toggle="modal"><img src="../../assets/images/yuuyake/iconfinder_Firefox_17572.png" alt="Tigre chinois" class="img-fluid" title="" width="90%" height="90%" /></a>
                <div class="shop dropdown">
                  <a style="background-color:black; color:white;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="yellow-hover">Connexion</span></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#connection" data-toggle="modal">Connexion / inscription</a>
    <a class="dropdown-item" href="">Déconnexion</a>
    <a class="dropdown-item" href="<?= $myAccount ?>">Mon compte</a>
    <a class="dropdown-item" href="<?= $checkCalendar ?>">Gérer le calendrier</a>
  </div>             
             </li>
             </ul>
          </div>
          <div class="col-1">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item text-center">
                <img src="../../assets/images/756974331.gif" class="img-fluid rounded-circle" alt="logo YinYang ThieuLam" width="100%" height="100%" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <!-- Fin navbar -->





 <!-- Début navbar minimisée  -->
<nav id="navbarMin" class="navbar navbar-expand-lg sticky-top">
      <a class="navbar-brand" href="#"></a>
      <button id="navButton" class="navbar-toggler mx-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span id="textNavButton">Cliquez pour voir le menu</span>
      </button>

     

      <div class="row w-100">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <div class="col-1">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item">
                <img src="../../assets/images/756974331.gif" class="img-fluid rounded-circle" alt="logo YinYang ThieuLam" width="70%" height="70%" />
              </li>
            </ul>
          </div>
          <div class="col-10">
            <ul class="justify-content-center align-items-center navbar-nav mx-auto">
              <li class="nav-item">
                <div class="home">
                  <a class="clickTop nav-link" href="<?= $home ?>">Accueil</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="schoolDoors">
                  <a class="clickTop nav-link" href="<?= $schoolDoors ?>">Portes de l'école</a>
                </div>
              </li>
              <li class="nav-item dropdown">
                <div class="news">
                  <a class="clickTop nav-link" href="<?= $news ?>">Fil d'actualités</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="kungfu dropdown">
                <a style="color:white;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="yellow-hover">Nos disciplines</span></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?= $kungfu ?>">Kung Fu</a>
    <a class="dropdown-item" href="<?= $taichi ?>">Taïchi Chuan & Qi Gong</a>
    <a class="dropdown-item" href="<?= $sanda ?>">Sanda & Shoubo</a>
  </div>                 
              </li>
              <li class="nav-item">
                <div class="ourCircle">
                  <a class="clickTop nav-link" href="<?= $ourCircle ?>">Notre cercle</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="links dropdown">
                <a style="color:white;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="yellow-hover">Liens</span></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="<?= $pictures ?>">Photos</a>
    <a class="dropdown-item" href="<?= $video ?>">Vidéos</a>
    <a class="dropdown-item" href="<?= $techniques ?>">Cahiers techniques</a>
    <a class="dropdown-item" href="<?= $otherSchools ?>">Autres écoles</a>
    <a class="dropdown-item" href="<?= $contact ?>">Contact</a>
  </div>                       
             </li>
              <li class="nav-item">
                <div class="shop">
                  <a class="clickTop nav-link" href="<?= $shop ?>">Boutique</a>
                </div>
              </li>
              <li class="nav-item">
                <div class="shop dropdown">
                  <a style="color:white;" class="btn dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><span class="yellow-hover">Connexion</span></a>
  <div class="dropdown-menu" aria-labelledby="dropdownMenuLink">
    <a class="dropdown-item" href="#connection" data-toggle="modal">Connexion / inscription</a>
    <a class="dropdown-item" href="">Déconnexion</a>
    <a class="dropdown-item" href="<?= $myAccount ?>">Mon compte</a>
    <a class="dropdown-item" href="<?= $checkCalendar ?>">Gérer le calendrier</a>
  </div>             
             </li>
             </ul>
          </div>
          <div class="col-1">
            <ul class="navbar-nav mx-auto">
              <li class="nav-item text-center">
                <img src="../../assets/images/756974331.gif" class="img-fluid rounded-circle" alt="logo YinYang ThieuLam" width="70%" height="70%" />
              </li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

     <!-- Fin navbar minimisée -->

     <div id="body">



<!-- Début modal login -->

<div id="connection" class="modal fade" tabindex="-1" role="dialog">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Connexion</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
<form name="loginForm" method="POST" action="../../view/form/connexion.php">
  <ul class="text-center">

  <span class="font-weight-bolder"><label for="login"><I>Identifiant (ou adresse mail)  </I></label><br /> <input class="<?php echo (isset($_POST['login']) && !preg_match($regexLogin, $_POST['login']))? 'red':'';  ?>" value="<?= $_POST['login']?>" type="text" name="login" id="login" placeholder="Pseudo" required /><small class="text-white"><br />Vous pouvez tout simplement choisir votre adresse mail.</small><p class="errorMessage"><?= (isset($error['errorLogin'])) ? $error['errorLogin'] : ''; ?></p></span>
  
  <span class="font-weight-bolder"><label for="password"><I>Mot de passe  </I></label><br /> <input class="<?php echo (isset($_POST['password']) && !preg_match($regexPassword, $_POST['password']))? 'red':'';  ?>" value="<?= $_POST['password']?>" type="password" name="password" id="password" required/><p class="errorMessage"><?= (isset($error['errorPassword'])) ? $error['errorPassword'] : ''; ?></p></span>

</ul>

<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
  <button id="loginButton" type="submit" href="../../view/form/connexion.php" onclick="checkPasswordLogin();" class="btn btn-primary" style="background-color:#00acc1; color: white; float:right;">C'est parti !</button>
</form>
</div>
<div class="modal-footer">
      <a href="../../view/form/inscriptionForm.php" class="mx-auto"><p><small><u><i>Pas encore inscrit ?</i></u></small></p></a>
        </div>
    </div>
    </div>
</div>

  <!-- Fin modal login -->




   <!-- Listes des variables de liens de la navbar vers les pages du site :#
$home = ;
$schoolDoors = ;
$news = ;
$kungfu = ;
$taichi = ;
$sanda = ;
$ourCircle = ;
$pictures = ;
$video = ;
$otherSchools = ;
$contact = ;
$shop = ;
$connexion = ;
$myAccount = ;
$checkCalendar = ;

Listes des variables de liens du footer vers les pages mentions légales :
$AssoInfos = ;
$legalInfos = ;
$CGU = ;
$RGPD = ;
 -->