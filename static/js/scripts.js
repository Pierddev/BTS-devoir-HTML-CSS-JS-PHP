// Source - https://stackoverflow.com/a
// Posted by Joseph Silber, modified by community. See post 'Timeline' for change history
// Retrieved 2025-12-05, License - CC BY-SA 3.0
// Le script suivant a été récupéré sur le forum indiqué ci-dessus afin d'avoir un effet "smooth" lors des clic sur les liens de la navbar
document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
   anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
         behavior: "smooth",
      });
   });
});

// Script dédié au formulaire
const inputNom = document.getElementById("input-nom");
const inputPrenom = document.getElementById("input-prenom");
const inputEmail = document.getElementById("input-email");
const bouttonContact = document.getElementById("contact-valider");
const formSuccess = document.getElementById("form-success");
const formError = document.getElementById("form-error");

bouttonContact.addEventListener("click", () => {
   let nom = false;
   let prenom = false;
   let email = false;
   let error = false;

   if (inputNom.value != '' || inputNom.value != inputNom.defaultValue) {
      nom = true;
   } else {
      error = true;
   }

   if (inputPrenom.value != '' || inputPrenom.value != inputPrenom.defaultValue) {
      prenom = true;
   } else {
      error = true;
   }

   if (inputEmail.value != '' || inputEmail.value != inputEmail.defaultValue) {
      email = true;
   } else {
      error = true;
   }

   if (error == false) {
      formSuccess.classList.remove("hidden");
      formError.classList.add("hidden");
   } else {
      formError.classList.remove("hidden");
      formSuccess.classList.add("hidden");
   }

})
