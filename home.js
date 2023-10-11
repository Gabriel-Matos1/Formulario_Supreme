const menuToggle = document.getElementById("menuToggle");
const menu = document.getElementById("menu");
const content = document.querySelector(".content");
const sair = document.querySelector(".sair"); 

menuToggle.addEventListener("click", function () {
    menu.classList.toggle("active");
    content.classList.toggle("active");
});

sair.addEventListener("click", function () {
    menu.classList.remove("active");
    content.classList.remove("active"); 
});
