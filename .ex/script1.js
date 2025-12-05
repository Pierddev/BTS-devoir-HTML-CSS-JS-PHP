const questionContainer = document.querySelector(".click-event");
const btn1 = document.getElementById("btn-1");
const btn2 = document.getElementById("btn-2");
const response = document.getElementById("reponse");

btn1.addEventListener("click", () => {
   response.classList.remove("hidden");
   response.classList.add("font-bold", "text-red-600");
})

btn2.addEventListener("click", () => {
   response.classList.remove("hidden");
   response.classList.add("font-bold", "text-green-600");
}) 