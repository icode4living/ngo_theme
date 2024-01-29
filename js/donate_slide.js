let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("fade-text");
  //let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  /*for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }*/
  slides[slideIndex-1].style.display = "block";  
  //dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

document.addEventListener("scroll", ()=>{
///document.querySelector(".header").style.display="block"
//alert("hello")
});

//reviews slide
let _slideIndex = 1;
_showSlides(slideIndex);

function _plusSlides(x) {
  _showSlides(slideIndex += x);
}

function currentSlide(x) {
  _showSlides(slideIndex = x);
}

function _showSlides(x) {
  let _i;
  let _slides = document.getElementsByClassName("review-container");
  let _dots = document.getElementsByClassName("dot");
  if (x > _slides.length) {_slideIndex = 1}    
  if (x < 1) {_slideIndex = _slides.length}
  for (_i = 0; _i < _slides.length; _i++) {
    _slides[_i].style.display = "none";  
  }
  for (_i = 0; _i < _dots.length; _i++) {
    _dots[_i].className = _dots[_i].className.replace(" active", "");
  }
  _slides[slideIndex-1].style.display = "flex";  
  _dots[slideIndex-1].className += " active";
}