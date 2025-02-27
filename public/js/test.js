document.addEventListener("DOMContentLoaded", function () {
    const fieldsets = document.querySelectorAll("fieldset");

    fieldsets.forEach(fieldset => {
        const inputs = fieldset.querySelectorAll(".input-form");

        inputs.forEach(input => {
            const container = input.parentElement; // Sélectionne le container-input

            // Vérifie au chargement si l'input est checked
            if (input.checked) {
                container.style.backgroundColor = "var(--bleu)";
                container.style.color = "white";
            }

            input.addEventListener("change", function () {
                // Réinitialise tous les containers du même fieldset
                fieldset.querySelectorAll(".container-input").forEach(container => {
                    container.style.backgroundColor = ""; // Remet le CSS par défaut
                    container.style.color = ""; // Remet la couleur par défaut
                });

                // Applique la couleur seulement au container sélectionné
                container.style.backgroundColor = "var(--bleu)";
                container.style.color = "white";
            });
        });
    });
});
