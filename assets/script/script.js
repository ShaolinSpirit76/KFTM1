// Affichage conditionnel du formulaire d'inscription
// div cachées avant tout choix
$('#studentCourse').hide();
$("#group").hide();
$("#studentYear").hide();
$("#childBelt").hide();
$("#studentBelt").hide();
$("#teacherCourse").hide();
$("#teacherRank").hide();


// Si statut élève alors
$("#élève").click(function() {
  $('#studentCourse').show();
  $("#teacherCourse").hide();
  $("#group").show();
  $("#studentYear").show();
  $("#childBelt").hide();
  $("#studentBelt").hide();
  $("#teacherRank").hide();


// Si groupe enfant alors
  $("#Enfants").click(function() {
  $("#childBelt").show();
  $("#studentBelt").hide();
  $("#teacherRank").hide();
  });   

 // Si groupe ados alors
  $("#Ados").click(function() {
    $("#childBelt").show();
    $("#studentBelt").hide();
    $("#teacherRank").hide();
      });  
      
// Si groupe adulte alors
      $("#Adultes").click(function() {
        $("#childBelt").hide();
        $("#studentBelt").show();
        $("#teacherRank").hide();
          });   
});

// Si statut maître alors
$("#maître").click(function() {
  $('#studentCourse').hide();
  $("#teacherCourse").show();
  $("#group").hide();
  $("#studentYear").hide();
  $("#childBelt").hide();
  $("#studentBelt").show();
  $("#teacherRank").show();
});

$("#maître_et_élève").click(function() {
  $('#studentCourse').show();
  $("#teacherCourse").show();
  $("#group").hide();
  $("#studentYear").show();
  $("#childBelt").hide();
  $("#studentBelt").show();
  $("#teacherRank").show();
});

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


        // modal connexion

        $('#login').on('shown.bs.modal', function () {
          $('#login').trigger('focus')
        });

        $(document).ready(function () {
          $('.modal').modal();
      });
      

      // Affichage conditionnel du formulaire d'inscription

      // $(document).ready(function () {
      //   $('#Enfants').val($("input[type=checkbox]:checked").length);
      //   $('#Ados').val($("input[type=checkbox]").length);
      //   $('#Adultes').val($("input[type=checkbox]").length);
        
      //   $('input[type=checkbox]').change(function () {
      //   checked = $("input[type=checkbox]:checked").length;
      //   $('#childBelt').show();
      //   $('#youngBelt').hide();
      //   $('#studentBelt').hide();
      //   if (checked > 0) {
      //     $('#childBelt').hide();
      //     $('#youngBelt').hide();
      //     $('#studentBelt').show();
      //     $('#Enfants').val(checked);
      //    }
      //   });
      //   });

        // Pour que soit requise au moins une checkbox du formulaire d'inscription

        
        // $(".home").click(function() {
        //   $("#head").show();

      //   $(document).ready(function () {
      //     $('#submitInscriptionForm').click(function() {
      //       checked = $("input[type=checkbox]:checked").length;
      
      //       if(!checked) {
      //         alert("You must check at least one checkbox.");
      //         return false;
      //       }
      
      //     });
      // });

      // $(document).ready(function () {
      //   $('#submitInscriptionForm').click(function() {


      //   });