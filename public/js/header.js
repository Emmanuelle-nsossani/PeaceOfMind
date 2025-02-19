document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("menu");
  const interagirLabel = document.getElementById("menu-interagir");
  const sousMenu = document.getElementById("sous-li");

  // Fonction pour fermer le menu
  function closeMenu() {
    menuToggle.classList.remove("active");
    navMenu.style.display = "none"; // Cache le menu
  }

  // Fonction pour ouvrir le menu
  function openMenu() {
    menuToggle.classList.add("active");
    navMenu.style.display = "block"; // Affiche le menu
  }

  // Toggle du menu principal
  menuToggle.addEventListener("click", function (event) {
    event.stopPropagation(); // Empêche la fermeture immédiate
    if (navMenu.style.display === "block") {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Toggle du sous-menu "Interagir avec nous"
  interagirLabel.addEventListener("click", function (event) {
    event.preventDefault();
    event.stopPropagation(); // Empêche la fermeture du menu au clic sur "Interagir avec nous"

    if (sousMenu.classList.contains("active")) {
      sousMenu.style.maxHeight = "0px";
      setTimeout(() => sousMenu.classList.remove("active"), 300);
    } else {
      sousMenu.classList.add("active");
      sousMenu.style.maxHeight = sousMenu.scrollHeight + "px";
    }
  });

  // Fermer le menu en cliquant à l'extérieur
  document.addEventListener("click", function (event) {
    if (!navMenu.contains(event.target) && !menuToggle.contains(event.target)) {
      closeMenu();
    }
  });
});
