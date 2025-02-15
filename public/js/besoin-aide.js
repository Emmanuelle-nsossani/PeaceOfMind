document.addEventListener("DOMContentLoaded", function () {
    const question1 = document.getElementById("question1");
    const question2 = document.getElementById("question2");
    const question3 = document.getElementById("question3");
    const question4 = document.getElementById("question4");
    const nextq1 = document.getElementById("next-q1");
    const nextq2 = document.getElementById("next-q2");
    const nextq3 = document.getElementById("next-q3");

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
});