<?php
// Importation de la configuration pour la connexion à la BDD
require_once "config.php";

$req = $pdo->query("SELECT * FROM noms");
$users = $req->fetchAll();
$creator = $users[0]['nom'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
   <meta charset="UTF-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
   <title>DUAULT Pierre - Devoir</title>
   <script src="static/js/scripts.js" defer></script>
</head>

<body class="bg-[#00141a] text-white"> <!-- Suppression de la classe h-[200vh] pour que la hauteur de la page correspond au contenu -->
   <header class="flex flex-col items-center w-full py-2">
      <nav class="fixed flex gap-10 text-lg bg-white/10 p-2 rounded-xl backdrop-blur-[4px] border border-white/20">
         <a class="hover:bg-white/10 rounded-lg p-2 transition-all" href="#accueil">Accueil</a>
         <a class="hover:bg-white/10 rounded-lg p-2 transition-all" href="#contact">Contactez-moi</a>
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
            <img class="max-w-[500px] rounded-xl" src="static/img/img-accueil.jpg" alt="Image random">
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
            <img class="max-w-[600px] rounded-xl" src="static/img/img-contact.jpg" alt="image de contact">
            <!-- FORMULAIRE DE CONTACT -->
            <form class="flex flex-col gap-4" action="POST">
               <div class="text-center max-w-[300px]">Pour être recontacté veuillez renseigner les informations suivantes :</div>
               <input id="input-nom" class="bg-white text-black p-2 rounded-lg w-[300px]" type="text" placeholder="Nom">
               <input id="input-prenom" class="bg-white text-black p-2 rounded-lg w-[300px]" type="text" placeholder="Prenom">
               <input id="input-email" class="bg-white text-black p-2 rounded-lg w-[300px]" type="email" placeholder="Adresse email">
               <button id="contact-valider" class="bg-amber-300 text-black p-2 rounded-lg w-[300px] hover:cursor-pointer hover:bg-amber-400 transition-all" type="button">Valider</button>
               <div class="flex flex-col items-center justify-center relative">
                  <div id="form-success" class="hidden top-1 absolute bg-green-600 p-4 text-center rounded-lg transition-all">Votre demande est bien envoyée !</div>
                  <div id="form-error" class="hidden top-2 abolute bg-red-600 p-4 text-center rounded-lg transition-all">Vos informations ne sont pas correctes</div>
               </div>
            </form>
         </div>
      </section>
   </main>
   <!-- FOOTER -->
   <footer class="flex flex-col items-center justify-center w-full h-20 bg-white/10 mt-20">
      <div>Page web faite par <?= $creator ?>.</div>
   </footer>
</body>

</html>