document.addEventListener("DOMContentLoaded", function () {
  const menuToggle = document.getElementById("menuToggle");
  const navMenu = document.getElementById("menu");
  const interagirLabel = document.getElementById("menu-interagir");
  const sousMenu = document.getElementById("sous-li");
  const fleche = document.getElementById("fleche-menu-interagir");

  // DESKTOP
  const menuDesktop = document.getElementById("hidden");
  const interagir = document.getElementById("interagir")

  // Fonction pour fermer le menu
  function closeMenu() {
    menuToggle.classList.remove("active");
    navMenu.classList.remove("active"); // On enlève aussi la classe active pour la transition
  }

  function closeMenuDesktop() {
    menuDesktop.classList.remove("visible");
    menuDesktop.classList.add("hidden");
  }

  function openMenuDesktop() {
    menuDesktop.classList.add("visible");
    menuDesktop.classList.remove("hidden");
  }

  // Fonction pour ouvrir le menu
  function openMenu() {
    menuToggle.classList.add("active");
    navMenu.classList.add("active"); // On ajoute la classe active pour la transition
  }

  // Toggle du menu principal
  menuToggle.addEventListener("click", function (event) {
    event.stopPropagation();
    if (navMenu.classList.contains("active")) {
      closeMenu();
    } else {
      openMenu();
    }
  });

  // Toggle du menu principal
  interagir.addEventListener("click", function (event) {
    console.log("clicl");
    event.stopPropagation();
    if (menuDesktop.classList.contains("visible")) {
      closeMenuDesktop();
    } else {
      openMenuDesktop();
    }
  });

  // Toggle du sous-menu "Interagir avec nous"
  interagirLabel.addEventListener("click", function (event) {
    event.preventDefault();
    event.stopPropagation(); // Empêche la fermeture du menu

    if (sousMenu.classList.contains("active")) {
      sousMenu.style.maxHeight = "0px";
      fleche.style.transform = "rotateX(0)";
      setTimeout(() => sousMenu.classList.remove("active"), 300);
    } else {
      sousMenu.classList.add("active");
      fleche.style.transform = "rotateX(180deg)";
      sousMenu.style.maxHeight = sousMenu.scrollHeight + "px";
    }
  });

  // Fermer le menu en cliquant à l'extérieur
  document.addEventListener("click", function (event) {
    if (!navMenu.contains(event.target) && !menuToggle.contains(event.target)) {
      closeMenu();
    }
    if (!menuDesktop.contains(event.target) && !menuDesktop.contains(event.target)) {
      closeMenu();
    }
  });
});
