$('.carte-container').on('click', function () {
  $(this).toggleClass('flipped'); 
});

document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("menu");

  const btnConnexion = document.getElementById("connexion-button");
  const btnInscription = document.getElementById("inscription-button");
  const formConnexion = document.getElementById("form-connexion");
  const formInscription = document.getElementById("form-inscription");

  btnConnexion.addEventListener("click", function(){
    formConnexion.classList.toggle("form-hidden");
    formInscription.classList.toggle("form-hidden");
  })

  btnInscription.addEventListener("click", function(){
    formConnexion.classList.toggle("form-hidden");
    formInscription.classList.toggle("form-hidden");
  })

  menuToggle.addEventListener("click", function() {
      menuToggle.classList.toggle("active"); // Ajoute ou retire la classe 'active' pour l'animation
      navMenu.classList.toggle("menu"); // Affiche ou cache le menu
  });
});
