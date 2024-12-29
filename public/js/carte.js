$('.carte-container').on('click', function () {
  $(this).toggleClass('flipped'); // Applique la classe flipped sur la carte container
});

document.addEventListener("DOMContentLoaded", function() {
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("menu");

  menuToggle.addEventListener("click", function() {
      menuToggle.classList.toggle("active"); // Ajoute ou retire la classe 'active' pour l'animation
      navMenu.classList.toggle("menu"); // Affiche ou cache le menu
  });
});
