// Affichage conditionnel du formulaire d'inscription
// div cachées avant tout choix
$('#studentCourse').hide();
$("#groupAge").hide();
$("#studentYear").hide();
$("#childBelt").hide();
$("#studentBelt").hide();
$("#teacherCourse").hide();
$("#teacherRank").hide();


// Si statut élève alors
$("#élève").click(function() {
  $('#studentCourse').show();
  $("#teacherCourse").hide();
  $("#groupAge").show();
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
  $("#groupAge").hide();
  $("#studentYear").hide();
  $("#childBelt").hide();
  $("#studentBelt").show();
  $("#teacherRank").show();
});

$("#maître_et_élève").click(function() {
  $('#studentCourse').show();
  $("#teacherCourse").show();
  $("#groupAge").hide();
  $("#studentYear").show();
  $("#childBelt").hide();
  $("#studentBelt").show();
  $("#teacherRank").show();
});





// Affichage conditionnel du formulaire mon compte
// div cachées avant toute modification
$('#newBirthDate').hide();
$('#newMail').hide();
$('#newPhoneNumber').hide();
$('#newUserLog').hide();
$('#newPassword').hide();
$('#updateNewPassword').hide();
$('#newPicture').hide();

$("#updateBirthDate").click(function() {
  $('#newBirthDate').show();
});

$("#updateMail").click(function() {
  $('#newMail').show();
});

$("#updatePhoneNumber").click(function() {
  $('#newPhoneNumber').show();
});

$("#updateUserLog").click(function() {
  $('#newUserLog').show();
});

$("#updatePassword").click(function() {
  $('#newPassword').show();
});

$("#updatePicture").click(function() {
  $('#newPicture').show();
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
      

      