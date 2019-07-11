// Pour les animations
AOS.init();


// Gestion de l'ancre

$(document).ready(function() {
  $(".clickTop").click(function() {
    $('html, body').animate({
      scrollTop: $("#connexion").offset().top
    }, 2000);
  });
});

// Scroll to top

var btn = $('#buttonScroll');

$(window).scroll(function() {
  if ($(window).scrollTop() > 300) {
    btn.addClass('show');
  } else {
    btn.removeClass('show');
  }
});

btn.on('click', function(e) {
  e.preventDefault();
  $('html, body').animate({
    scrollTop: 0
  }, '300');
});

// Modification de la navbar en sticky-top

// window.onscroll = function() {myFunction()};

// function myFunction() {
//   if (document.body.scrollTop > 600 || document.documentElement.scrollTop > 600) {
//     $('#navbarMin').show();
//   } else {
//    $('#navbarMin').hide();
//   }
// }




        // Vérification de la confirmation du mot de passe du formulaire d'inscription

        var regexLogin = /^[a-zA-ZéèÉÈôîêûÛÊÔÎùÙïöëüËÏÖÜç0-9œ&~#{([|_\^@)°+=}*µ%!§.;,?<>]{2,15}[- ']?[a-zA-ZéèÉÈôîêûÛÊÔÎùÙïöëüËÏÖÜç0-9œ&~#{([|_\^@)°+=}*µ%!§.;,?<>]{0,15}$/;
        var regexPassword = /^(?=.*[A-Z])(?=.*[a-z])(?=.*\d)(?=.*[-+!*$@%_.])([-.+!*$@%_\w]{8,15})$/;

        $("#confirmPassword").focusout(function() {
          var password = $("#password").val();
          var confirmPassword = $("#confirmPassword").val();
          if (password == "") {
            $("#password").css("border", "solid 2px red");
            $("#confirmPassword").css("border", "solid 2px red");
            alert("Veuillez entrer votre mot de passe dans le premier champs !");
          } else if (confirmPassword == "") {
            $("#password").css("border", "solid 2px green");
            $("#confirmPassword").css("border", "solid 2px red");
            alert("Veuillez entrer votre mot de passe dans le second champs !");
          } else if (password != confirmPassword) {
            $("#confirmPassword").css("border", "solid 2px red");
            alert("Confirmation du mot de passe invalide");
          } else {
            $("#password").css("border", "solid 2px green");
            $("#confirmPassword").css("border", "solid 2px green");
          }
        });
