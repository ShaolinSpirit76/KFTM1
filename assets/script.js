// Pour les animations
AOS.init();


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






// Div cachées à l'ouverture de la page d'accueil

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();


// Retour à l'accueil : afficher comme à l'ouverture de la page

$(".home").click(function() {
  $("#header").show();
  $("#home1").show();
  $("#home").show();

  $("#schoolDoors").hide();
  $("#news").hide();
  $("#kungFu").hide();
  $("#taïchiChuan").hide();
  $("#sandaShoubo").hide();
  $("#ourCircle").hide();
  $("#links").hide();
  $("#shop").hide();
  $("#contactForm").hide();
  $("#legalInformations").hide();
  $("#CGU").hide();
  $("#RGPD").hide();
});


// Changement des pages


// Page schoolDoors

$(".schoolDoors").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").show();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page news

$(".news").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").show();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page kungFu

$(".kungFu").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").show();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page taïchiChuan

$(".taïchiChuan").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").show();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page sandaShoubo

$(".sandaShoubo").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").show();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page ourCircle

$(".ourCircle").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").show();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page links

$(".links").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").show();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page shop

$(".shop").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").show();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page contactForm

$(".contactForm").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").show();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page legalInformations

$(".legalInformations").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").show();
$("#CGU").hide();
$("#RGPD").hide();
});

// Page CGU

$(".CGU").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").show();
$("#RGPD").hide();
});

// Page RGPD

$(".RGPD").click(function() {
$("#header").hide();
$("#home1").hide();
$("#home").hide();

$("#schoolDoors").hide();
$("#news").hide();
$("#kungFu").hide();
$("#taïchiChuan").hide();
$("#sandaShoubo").hide();
$("#ourCircle").hide();
$("#links").hide();
$("#shop").hide();
$("#contactForm").hide();
$("#legalInformations").hide();
$("#CGU").hide();
$("#RGPD").show();
});

// Gestion de l'ancres

$(document).ready(function() {
  $(".clickTop").click(function() {
    $('html, body').animate({
      scrollTop: $("#connexion").offset().top
    }, 2000);
  });
});
