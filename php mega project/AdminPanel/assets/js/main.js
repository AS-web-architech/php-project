// add hovered class to selected list item
let list = document.querySelectorAll(".navigation li");

function activeLink(){
    list.forEach((item) =>{
        item.classList.remove("hovered");
    });
    this.classList.add("hovered");
}
list.forEach((item) => item.addEventListener("mouseover", activeLink));

// Main Toggel
let toggel = document.querySelector(".toggle");
let navigation = document.querySelector(".navigation");
let main = document.querySelector(".main");
let userData = document.querySelector(".navigation ul li a .icon .ion-icon");

toggel.onclick = function(){
    navigation.classList.toggle("active");
    main.classList.toggle("active");
    userData.classList.toggle("active");
}