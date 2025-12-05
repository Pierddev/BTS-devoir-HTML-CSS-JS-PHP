// Source - https://stackoverflow.com/a
// Posted by Joseph Silber, modified by community. See post 'Timeline' for change history
// Retrieved 2025-12-05, License - CC BY-SA 3.0
// Script récupérer sur le forum indiqué ci-dessus afin d'avoir un effet "smooth" lors des clic sur les liens de la navbar

document.querySelectorAll('a[href^="#"]').forEach((anchor) => {
   anchor.addEventListener("click", function (e) {
      e.preventDefault();

      document.querySelector(this.getAttribute("href")).scrollIntoView({
         behavior: "smooth",
      });
   });
});
