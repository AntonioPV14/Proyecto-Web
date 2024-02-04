//hovered para seleccionar un item de la lista
let list = document.querySelectorAll(".navigation li");

function activeLink() {
    list.forEach(item => {
        item.classList.remove("hovered");
    })
    this.classList.add("horeved");
}

list.forEach(item => item.addEventListener("mouseover", activeLink));


//Menu desplegable
let toggle = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");

toggle.onclick = function() {
    navigation.classList.toggle("active");
    main.classList.toggle("active");
}