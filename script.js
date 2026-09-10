let index = 0; // Current slide
const slides = document.querySelectorAll(".slide");

function showSlide(n) {
  slides.forEach((slide, i) => {
    slide.style.display = i === n ? "block" : "none";
  });
}

// Next/previous controls
function changeSlides(n) {
  index += n;
  if (index >= slides.length) index = 0;
  if (index < 0) index = slides.length - 1;
  showSlide(index);
}

// Initial display
showSlide(index);
function myFunction(x) {
  x.classList.toggle("change");
  var x = document.getElementById("menu");
if (x.style.display === "inline-block") {
x.style.display = "none";
} else {
x.style.display = "inline-block";
}
}

let slideIndex = 0;
showSlides();

function showSlides() {
  let i;
  let slides = document.getElementsByClassName("mySlides");
  let dots = document.getElementsByClassName("dot");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";  
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}    
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
  setTimeout(showSlides, 10000); // Change image every 2 seconds
}

function myFunctionZ(z) {
  z.classList.toggle("change");
  var z = document.getElementById("trsn-board");
if (z.style.display === "block") {
z.style.display = "none";
} else {
z.style.display = "block";
}
}

function confirmPassword() {
  var password = document.forms["adminsForm"]["password"].value;
  var confirm = document.forms["adminsForm"]["confirm"].value;

  if (password !== confirm) {
    window.alert("Passwords don't match. Please try again.");
    return false;
  } else {
    return true;
  }
}

function confirmPassword2() {
  var password = document.forms["customersForm"]["password2"].value;
  var confirm = document.forms["customersForm"]["confirm2"].value;

  if (password !== confirm) {
    window.alert("Passwords don't match. Please try again.");
    return false;
  } else {
    return true;
  }
}

// document.onreadystatechange = function () {
//   if (document.readyState !== "complete") {
//     document.querySelector("body").style.visibility = "hidden";
//     document.querySelector("#loader2").style.visibility = "visible";
//   } else {
//     document.querySelector("body").style.visibility = "visible";
//     document.querySelector("#loader2").style.display = "none";
//   }
// };

var loader = document.getElementById("loader2");
loader.style.display = "none";
window.addEventListener("load", function() {
  loader.style.display = "none";
})