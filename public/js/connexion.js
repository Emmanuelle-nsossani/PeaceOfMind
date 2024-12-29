$('.carte-container').on('click', function () {
    $(this).toggleClass('flipped');
});

document.addEventListener("DOMContentLoaded", function () {

    const btnConnexion = document.getElementById("connexion-button");
    const btnInscription = document.getElementById("inscription-button");
    const formConnexion = document.getElementById("form-connexion");
    const formInscription = document.getElementById("form-inscription");

    btnConnexion.addEventListener("click", function () {
        formConnexion.classList.toggle("form-hidden");
        formInscription.classList.toggle("form-hidden");
    })

    btnInscription.addEventListener("click", function () {
        formConnexion.classList.toggle("form-hidden");
        formInscription.classList.toggle("form-hidden");
    })
});
