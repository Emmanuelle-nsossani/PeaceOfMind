document.addEventListener("DOMContentLoaded", () => {
    const questions = document.querySelectorAll(".question");

    questions.forEach(question => {
        question.addEventListener("click", () => {
            const reponse = question.nextElementSibling; // Sélectionne l'élément suivant (la réponse)
            reponse.classList.toggle("hidden-reponse"); // Ajoute ou enlève la classe pour afficher/masquer la réponse

            // Optionnel : faire pivoter l'image de la flèche
            const fleche = question.querySelector("img");
            fleche.classList.toggle("rotate");
        });
    });
});
