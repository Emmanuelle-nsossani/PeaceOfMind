document.addEventListener("DOMContentLoaded", function () {
    // Lien vers les articles entier 
    const article1 = document.getElementById("link-article1");
    article1.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        window.location = "index.php?page=article1";
    });

    const article2 = document.getElementById("link-article2");
    article1.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        window.location = "index.php?page=article2";
    });

    const article3 = document.getElementById("link-article3");
    article1.addEventListener("click", function (event) {
        event.preventDefault(); // Empêche la redirection de la page
        window.location = "index.php?page=article3";
    });
});
