<!DOCTYPE html>
<!-- Spécification du langage de la page et du sens de lecture -->
<html lang="fr" dir="ltr">

<head>

  <!-- Prise en charge des accents et autres caractères spéciaux -->
  <meta charset="utf-8" />
  <!-- Pour être responsive -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <!-- Compatibilité internet explorer -->
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <!-- CDN de font awesome pour l'utilisation des fa-fa et des icones -->
  <script src="https://kit.fontawesome.com/eaadffbb2b.js"></script>
  <script src="public/eaadffbb2b.js"></script>
  <!-- CDN de Bootstrap -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <link rel="stylesheet" href="public/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <!-- Lien avec la page CSS (toujours après Bootstrap pour éviter les bug) -->
  <link rel="stylesheet" href="public/header.css" />
  <link rel="stylesheet" href="public/footer.css" />
  <link rel="stylesheet" href="public/style.css" />
   <!-- Lien script pour animer -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script src="public/aos.js"></script>
  <!-- Lien pour le scroll to top -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="public/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Merriweather:400,900,900i" rel="stylesheet">
  <link href="public/css?family=Merriweather:400,900,900i.css" rel="stylesheet">
  <!-- Lien éventuel pour l'utilisation d'une police -->
  <link href="https://fonts.googleapis.com/css?family=Merienda|Permanent+Marker&display=swap" rel="stylesheet">
  <link href="public/css?family=Merienda|Permanent+Marker&display=swap.css" rel="stylesheet">
  <!-- Lien pour placer une icone dans l'onglet, avant le titre de la page -->
  <link rel="icon" href="public/images/logo.jpg">
    <!-- Titre de la page affiché dans l'onglet -->
  <title>Kung-Fu.ThieuLam.Montivilliers - Don't think... Feel !</title>

</head>

<body>
<!-- Pour le scroll to top -->
<a id="buttonScroll" class="rounded-circle"></a>


<?php
include 'view/home.php';
?>



<!-- Début du footer -->

<div id="foot">
    <footer class="main-footer">

      <!-- Footer Links -->
      <div class="container mt-5 mb-4 text-center text-md-left">
        <div class="row mt-3">

          <!-- First column -->
          <div class="col-md-3 col-lg-4 col-xl-3 mr-auto mb-4">
            <div class="photo-responsive">
              <a href="https://www.google.com/maps/place/49%C2%B033'15.6%22N+0%C2%B009'38.8%22E/@49.5543333,0.1602293,119m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d49.5543333!4d0.1607778" target="_blank"><img
                  src="public/images/12RueDuManoirMontivilliers.png" id="image7" class="img-fluid rounded" alt="lien adresse google map" width="100%" height="100%" title="Cliquez pour afficher l'adresse sur Google Map" /></a>
              <p><small class="text-white">École située entre le 17 et le 23 rue du Manoir, 76290, Montivilliers.<br />
                  Coordonnées GPS : <a href="https://www.google.com/maps/place/49%C2%B033'15.6%22N+0%C2%B009'38.8%22E/@49.5543333,0.1602293,119m/data=!3m2!1e3!4b1!4m5!3m4!1s0x0:0x0!8m2!3d49.5543333!4d0.1607778" target="_blank">49°33'15.6"N
                    0°09'38.8"E</a></small></p>
            </div>


          </div>
          <!-- First column -->

          <!-- Second column -->
          <div id="contact" class="col-md-4 offset-md-1 col-lg-3 col-xl-2.5 mx-auto mb-4">
            <h6 class="footer-title">Contact</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />

            <p id="contact">
              <img src="public/images/iconfinder_05_188725.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone d'email" title="Email" /> <a href="mailto:levray.jm@wanadoo.fr" title="Cliquez pour envoyer un email">levray.jm@wanadoo.fr</a></p>
            <p>
              <img src="public/images/iconfinder_Help_37470.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone de téléphone fixe" title="N° fixe" /> 02. 35. 20. 43. 16</p>
            <p>
              <img src="public/images/iconfinder_Mobile Device_37473.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone de téléphone portable" title="N° portable" /> 06. 22. 16. 71. 80</p>
            <p>
              <img src="public/images/iconfinder_1_3694241.svg" class="img-fluid mr-3" width="30%" height="30%" alt="icone facebook" title="Facebook" /> <a href="https://www.facebook.com/kungfuthieulammontivilliers" target="_blank" title="Cliquez pour aller"> Lien
                Facebook</a></p>
          </div>
          <!-- Second column -->

          <!-- Third column -->
          <div class="col-md-6 offset-md-1 col-lg-4 col-xl-5 mr-auto mb-8">
            <h6 class="footer-title">Pour toutes questions ou remarques concernant le site</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <p class="footer-legis">
              <img src="public/images/yuuyake/iconfinder_Windows live mail_17600.png" class="img-fluid mr-3" width="20%" height="20%" alt="icone d'email" title="Email" /> <a href="mailto:kungfu.montivilliers@gmail.com"
                title="Cliquez pour envoyer un email">kungfu.montivilliers@gmail.com</a><br /><br /></p>
            <h6 class="footer-title">Mentions légales</h6>
            <hr class="mb-4 mt-0 d-inline-block mx-auto" />
            <p class="footer-legis">
              • <a href="view/AssoInfos.php" class="clickTop">Informations légales de l'association</a>
            </p>
            <p class="footer-legis">
              • <a href="view/legalInfos.php" class="clickTop">Informations légales du site</a>
            </p>
            <p class="footer-legis">
              • <a href="view/CGU.php" title="Conditions Générales d'Utilisation" class="clickTop">CGU</a>
            </p>
            <p class="footer-legis">
              • <a href="view/RGPD.php" title="Règlement Général sur la Protection des Données" class="clickTop">RGPD</a>
            </p>
          </div>
          <!-- Third column -->







        </div>
      </div>
      <!-- Footer Links -->


      <!-- Copyright -->
      <div class="footer-copyright text-center py-3 bg-dark text-white">© 2019 Copyright : <a href="https://shaolinspirit76.github.io/" target="_blank">Shaolin Spirit 76</a>, du cercle Thieu-Lâm :)
      </div>
      <!-- Copyright -->

    </footer>
    <!-- Fin du footer-->
  </div>




  <!-- CDN JavaScript toujours à la fin du body pour éviter les bug -->
  <!-- D'abord le CDN de JQuery -->
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
  <script src="public/jquery.min.js"></script>
  <!-- Puis le CDN du Popper.js -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <script src="public/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
  <!-- Et enfin le CDN de Bootstrap.js -->
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <script src="public/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  <!-- Sweet alert 2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@8"></script>
  <script src="public/sweetalert2@8.js"></script>
  <!-- Lien avec la page JS (toujours après les CDN de JQuery) -->
  <script src="public/script.js"></script>
  <!-- Liens script.js pour les particules -->
  <script src="public/particle.js"></script>
  <script src="public/jquery_002.js"></script>
  <script src="public/plugins.js"></script>
  

</body>



</html>