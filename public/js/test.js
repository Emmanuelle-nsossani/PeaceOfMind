document.addEventListener("DOMContentLoaded", function () {
    const inputs = document.querySelectorAll(".input-form");

    inputs.forEach(input => {
        if (input.checked) {
            input.nextElementSibling.style.backgroundColor = "var(--bleu)";
            input.nextElementSibling.style.color = "white";
        }

        input.addEventListener("change", function () {
            // Vérifie si l'input est sélectionné
            if (this.checked) {
                this.nextElementSibling.style.backgroundColor = "var(--bleu)";
                this.nextElementSibling.style.color = "white";
            }

            if (!(this.checked)) {
                this.nextElementSibling.style.backgroundColor = "none";
                this.nextElementSibling.style.color = "black";
            }
        });
    });
});
