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
      <nav class="fixed flex gap-10 text-lg bg-white/10 p-2 rounded-xl backdrop-blur-xl">
         <a class="hover:bg-white/10 rounded-lg p-2" href="#accueil">Accueil</a>
         <a class="hover:bg-white/10 rounded-lg p-2" href="#contact">Contactez-moi</a>
      </nav>
   </header>
   <main class="mt-20">
      <section id="accueil" class="flex flex-col gap-10 items-center justify-center w-full">
         <div class="flex items-center">
            <div class="h-[1px] w-[400px] bg-white/50"></div>
            <div class="text-2xl mx-6">ACCUEIL</div>
            <div class="h-[1px] w-[400px] bg-white/50"></div>
         </div>
         <div class="flex items-center gap-6 text-center">
            <img class="max-w-[400px] rounded-xl" src="static/img/img-accueil.jpg" alt="">
            <p class="max-w-[300px]">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reprehenderit ab non facilis porro sunt deserunt eveniet earum numquam aliquam. Nulla saepe voluptatibus laboriosam blanditiis temporibus itaque neque est omnis minus?</p>
            <p class="max-w-[300px]">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequatur quaerat facilis molestiae quis ipsam, consectetur earum dignissimos accusantium. Iure numquam saepe adipisci est at perferendis dicta!</p>
         </div>
      </section>
      <section id="contact"></section>
   </main>
</body>

</html>