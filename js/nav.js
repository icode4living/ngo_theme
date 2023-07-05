/**Nav item control */
let openNav = document.querySelector(".open-menu");
let nav_items = document.querySelector(".main-nav-container");
let menu = document.querySelector("#main-nav");
openNav.addEventListener("click",()=>{
    //blur the background
    document.querySelector(".dark-bg").style.display = "block"
nav_items.style.display="block";
menu.classList.remove("main-nav");
menu.classList.add("m-main-nav")
//console.log("click");
document.querySelector("#main-nav");
})