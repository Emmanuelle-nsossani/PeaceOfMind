document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("menu");
  const interagirLabel = document.getElementById("menu-interagir");
  const sousMenu = document.getElementById("sous-li");

  // Toggle du menu principal
  menuToggle.addEventListener("click", function () {
    menuToggle.classList.toggle("active");
    navMenu.classList.toggle("menu");
  });

  // Toggle du sous-menu "Interagir avec nous"
  interagirLabel.addEventListener("click", function (event) {
    event.preventDefault();
    
    // Vérifie si le sous-menu est visible
    if (sousMenu.classList.contains("active")) {
      sousMenu.style.maxHeight = "0px"; // Cache avec transition
      setTimeout(() => sousMenu.classList.remove("active"), 300); // Retire la classe après l'animation
    } else {
      sousMenu.classList.add("active");
      sousMenu.style.maxHeight = sousMenu.scrollHeight + "px"; // Ajuste la hauteur automatiquement
    }
  });
});
