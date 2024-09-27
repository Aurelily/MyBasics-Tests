document.addEventListener("DOMContentLoaded", function () {
  const form = document.getElementById("createForm");
  const pseudo = document.getElementById("pseudo");
  const email = document.getElementById("email");
  const password = document.getElementById("password");
  const confirmPassword = document.getElementById("confirm_password");
  const submitButton = form.querySelector('input[type="submit"]'); // Sélection du bouton submit

  // Fonction pour afficher les erreurs
  //----------------------------------------------------------------------
  function showError(field, message) {
    // Supprime les messages d'erreurs précédents
    const existingError = field.nextElementSibling;
    if (existingError && existingError.classList.contains("error-message")) {
      existingError.remove();
    }

    // Crée un nouveau div pour le message d'erreur
    const errorMessage = document.createElement("p");
    errorMessage.textContent = message;
    errorMessage.classList.add("error-message"); // Ajout d'une classe pour identifier facilement
    field.insertAdjacentElement("afterend", errorMessage);

    toggleSubmitButton(); // Désactive ou active le bouton en fonction des erreurs
  }

  // Fonction pour supprimer le message d'erreur
  //----------------------------------------------------------------------
  function removeError(field) {
    const existingError = field.nextElementSibling;
    if (existingError && existingError.classList.contains("error-message")) {
      existingError.remove();
    }

    toggleSubmitButton(); // Désactive ou active le bouton en fonction des erreurs
  }

  // Fonction pour vérifier s'il y a des erreurs et activer/désactiver le bouton submit
  //----------------------------------------------------------------------
  function toggleSubmitButton() {
    const errors = form.querySelectorAll(".error-message"); // Recherche des messages d'erreur
    if (errors.length > 0) {
      submitButton.disabled = true; // Désactive le bouton s'il y a des erreurs
    } else {
      submitButton.disabled = false; // Active le bouton s'il n'y a pas d'erreurs
    }
  }

  // Désactiver le bouton submit au chargement de la page (tant que les champs ne sont pas vérifiés)
  submitButton.disabled = true;

  // Fonction de vérification avec fetch API pour pseudo et email
  //----------------------------------------------------------------------
  function checkField(field, value, errorMessage) {
    const fieldName = field.getAttribute("name");

    fetch("checkForm", {
      method: "POST",
      headers: {
        "Content-Type": "application/x-www-form-urlencoded",
      },
      body: `${fieldName}=${encodeURIComponent(value)}`, // Envoie clé=valeur
    })
      .then((response) => response.json()) // Le serveur renvoie du JSON
      .then((data) => {
        if (data[0] === "exists") {
          showError(field, errorMessage);
        } else {
          removeError(field); // Supprime le message d'erreur si l'élément n'existe pas
        }
      })
      .catch((error) => {
        console.error("Erreur lors de la vérification :", error);
      });
  }

  // Vérification côté serveur pour pseudo et email déjà utilisés
  pseudo.addEventListener("blur", function () {
    checkField(pseudo, pseudo.value, "Ce pseudo est déjà utilisé.");
  });

  email.addEventListener("blur", function () {
    checkField(email, email.value, "Cet email existe déjà.");
  });

  // Règles de validation du mot de passe
  function validatePassword(passwordValue) {
    const regex = /^(?=.*[a-z])(?=.*[A-Z])(?=.*\d)(?=.*[\W_]).{8,}$/;
    return regex.test(passwordValue);
  }

  // Vérification du mot de passe au blur
  password.addEventListener("blur", function () {
    if (!validatePassword(password.value)) {
      showError(
        password,
        "Votre mot de passe doit contenir au moins 8 caractères, 1 majuscule, 1 minuscule et un caractère spécial."
      );
    } else {
      removeError(password); // Supprime l'erreur si le mot de passe est valide
    }
  });

  // Vérification de la correspondance des mots de passe au blur
  confirmPassword.addEventListener("blur", function () {
    if (password.value !== confirmPassword.value) {
      showError(
        confirmPassword,
        "Les deux mots de passe ne correspondent pas."
      );
    } else {
      removeError(confirmPassword); // Supprime l'erreur si les mots de passe correspondent
    }
  });
});
