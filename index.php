<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>DUAULT Pierre - Devoir</title>
   <script src="static/js/scripts.js" defer></script>
</head>

<body class="h-[200vh] bg-[#00141a] text-white">
   <header class="flex flex-col items-center w-full py-2">
      <nav class="fixed flex gap-10 text-lg bg-white/10 p-2 rounded-xl backdrop-blur-[4px]">
         <a class="hover:bg-white/10 rounded-lg p-2" href="#accueil">Accueil</a>
         <a class="hover:bg-white/10 rounded-lg p-2" href="#contact">Contactez-moi</a>
      </nav>
   </header>
   <main>
      <!-- SECTION ACCUEIL -->
      <section id="accueil" class="flex flex-col gap-10 items-center justify-center w-full pt-20">
         <div class="flex items-center">
            <div class="h-[1px] w-[400px] bg-white/50"></div>
            <div class="text-2xl mx-6">ACCUEIL</div>
            <div class="h-[1px] w-[400px] bg-white/50"></div>
         </div>
         <div class="flex items-center gap-6 text-center">
            <img class="max-w-[400px] rounded-xl" src="static/img/img-accueil.jpg" alt="Image random">
            <p class="max-w-[300px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab non facilis porro sunt deserunt eveniet earum numquam aliquam. Nulla saepe voluptatibus laboriosam blanditiis temporibus itaque neque est omnis minus?</p>
            <p class="max-w-[300px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quaerat facilis molestiae quis ipsam, consectetur earum dignissimos accusantium. Iure numquam saepe adipisci est at perferendis dicta!</p>
         </div>
      </section>
      <!-- SECTION CONTACT -->
      <section id="contact" class="flex flex-col gap-10 items-center justify-center w-full pt-20">
         <div class="flex items-center">
            <div class="h-[1px] w-[400px] bg-white/50"></div>
            <div class="text-2xl mx-6">CONTACT</div>
            <div class="h-[1px] w-[400px] bg-white/50"></div>
         </div>
         <div class="flex items-center gap-8">
            <img class="max-w-[400px] rounded-xl" src="static/img/img-contact.jpg" alt="image de contact">
            <form class="flex flex-col gap-4" action="POST">
               <div class="text-center max-w-[300px]">Pour être recontacté veuillez renseigner les informations suivantes :</div>
               <input class="bg-white text-black p-2 rounded-lg w-[300px]" type="text" placeholder="Nom">
               <input class="bg-white text-black p-2 rounded-lg w-[300px]" type="text" placeholder="Prenom">
               <input class="bg-white text-black p-2 rounded-lg w-[300px]" type="text" placeholder="Adresse email">
               <input class="bg-white text-black p-2 rounded-lg w-[300px]" type="button" value="Valider">
            </form>
         </div>
      </section>
   </main>
</body>

</html>