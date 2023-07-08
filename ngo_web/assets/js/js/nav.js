/**Nav item control */


let openNavBtn = document.querySelector(".open-menu");
let nav_items = document.querySelector(".main-nav-container");
let menu = document.querySelector("#main-nav");
let closeNavBtn = document.querySelector("#close-btn");
/**display nav when the menu button is clicked  */
openNavBtn.addEventListener("click",()=>{
    //blur the background
    document.querySelector(".dark-bg").style.display = "block"
    document.querySelector(".close-btn").style.display = "block"

nav_items.style.display="block";
menu.classList.remove("main-nav");
menu.classList.add("m-main-nav")
//console.log("click");
document.querySelector("#main-nav");
});
/**close nav when the close button is clicked  */

closeNavBtn.addEventListener("click",()=>{
    //blur the background
    document.querySelector(".dark-bg").style.display = "none"
nav_items.style.display="none";
document.querySelector(".close-btn").style.display = "none"

menu.classList.add("main-nav");
menu.classList.remove("m-main-nav")
//console.log("click");
document.querySelector("#main-nav");
})