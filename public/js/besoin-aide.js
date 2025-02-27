document.addEventListener("DOMContentLoaded", function () {
    const question1 = document.getElementById("question1");
    const question2 = document.getElementById("question2");
    const question3 = document.getElementById("question3");
    const question4 = document.getElementById("question4");
    const nextq1 = document.getElementById("next-q1");
    const nextq2 = document.getElementById("next-q2");
    const nextq3 = document.getElementById("next-q3");
    const nextq4 = document.getElementById("next-q4");
    // MAP
    const mapOverlay = document.getElementById("map");
    const closeMap = document.getElementById("close-map");
    const buttonsAfficherMap = document.querySelectorAll(".afficher-map");


    nextq1.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        question1.classList.add("question-hidden");
        question2.classList.remove("question-hidden");
    });

    nextq2.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        question2.classList.add("question-hidden");
        question3.classList.remove("question-hidden");
    });

    nextq3.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        question3.classList.add("question-hidden");
        question4.classList.remove("question-hidden");
    });

    // Lien vers la page article 
    const lienArticle = document.getElementById("link-article");
    lienArticle.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        window.location = "http://localhost/sae302/index.php?page=connexion";
    });

    buttonsAfficherMap.forEach(button => {
        button.addEventListener("click", function (event) {
            event.preventDefault();
            mapOverlay.style.display = "flex";
            document.body.classList.add("no-scroll"); // Bloque le scroll
        });
    });

    closeMap.addEventListener("click", function () {
        mapOverlay.style.display = "none";
        document.body.classList.remove("no-scroll"); // Rétablit le scroll
        overlay.style.display = "none";

    });

    const markers = document.querySelectorAll("gmp-advanced-marker");

    const overlay = document.getElementById("overlay-med");

    // Référence au contenu de l'overlay
    const overlayContent = overlay.querySelector(".overlay-content");

    markers.forEach(marker => {
        marker.addEventListener("click", () => {
            const ville = marker.getAttribute("title");

            // Vérifie si le marqueur contient un enfant avec une classe spécifique
            let bgColor = "#fff"; // background par défaut
            if (marker.querySelector(".marqueur-jaune")) {
                // bgColor = "#FEDA7A";
            } else if (marker.querySelector(".marqueur-bleu")) {
                // bgColor = "#98D2F5";
            }
            overlayContent.style.backgroundColor = bgColor;

            // Animation de transition sur le contenu
            if (overlay.style.display === "flex") {
                overlayContent.classList.add("fade-out");
                overlayContent.offsetWidth; // force le recalcul du style

                setTimeout(() => {
                    document.getElementById("overlay-title").textContent = ville;
                    overlayContent.classList.remove("fade-out");
                    overlayContent.classList.add("fade-in");
                    overlayContent.offsetWidth; // recalcul pour l'animation de fade-in

                    setTimeout(() => {
                        overlayContent.classList.remove("fade-in");
                    }, 300);
                }, 300);
            } else {
                // Première ouverture de l'overlay avec animation
                document.getElementById("overlay-title").textContent = ville;
                overlay.style.display = "flex";
                overlayContent.classList.add("fade-in");
                overlayContent.offsetWidth;

                setTimeout(() => {
                    overlayContent.classList.remove("fade-in");
                }, 300);
            }
        });
    })

    // Fermeture de l'overlay
    document.getElementById("overlay-close").addEventListener("click", () => {
        overlay.style.display = "none";
    });
});
