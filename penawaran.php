<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing:border-box}
body {font-family: Verdana,sans-serif;}
.mySlides {display:none}

/* Slideshow container */
.slideshow-container {
  max-width: 1000px;
  position: relative;
  margin-left: -10px;
}.slideshow-container img{
  height: 550px;
  position: absolute;
  width: 137.7%;
  padding-top: 55px;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {
  height: 13px;
  width: 13px;

  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: #717171;
  text-align-last: center;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}#header{
   width: 100%;
   margin-top: -10px;
   position: absolute;
   margin-left: -10px;
    background-color: white;
    height: 60px;
    -webkit-box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 2);
            box-shadow: 0px 3px 10px -3px rgba(0, 0, 0, 2);
               text-align: left;
}#pict2{
  margin-top: -33px;
  margin-left: 30px;
}#dot{
  margin-left: 640px;
  margin-top: 550px;

}#pict1{
  margin-left: 640px;
  margin-top: -45px;
}.main-button {
  display:inline-block;
  padding:10px 30px;
  border:none;
  position: absolute;
  border-radius:40px;
  background-color:#f36700;
  color:#FFF;
  font-weight: 700;
  -webkit-transition:0.2s opacity;
  transition:0.2s opacity;
  font-family:  Poppins, cursive;
  text-shadow: 1.5px 1px rgba(0, 0, 0, 0.42);
  margin-top: 490px;
  margin-left: 635px;
}
.main-button:hover {
  color:#FFF;
  opacity:0.8;

 }

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}
</style>
</head>
<body>

<div id="header">
    <br>
    <div id="pict2">
      <br>
    <img src="images/logo2.png" width="40px" height="50px">
  </div>
  <div id="pict1">
    <img src="images/text_logo.png" width="90px" height="40px">
  </div>
</div>
<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 3</div>
  <img src="images/promosi1.jpg" >
  <a href="comingsoon.html"><b><button class="main-button">Ikuti</button></b></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 3</div>
  <img src="images/promosi2.jpg" >
<a href="comingsoon.html"><b><button class="main-button">Ikuti</button></b></a>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 3</div>
  <img src="images/promosi3.jpg" >
<a href="comingsoon.html"><b><button class="main-button">Ikuti</button></b></a>
</div>

</div>
<br>

<div id="dot">
  <span class="dot"></span> 
  <span class="dot"></span> 
  <span class="dot"></span> 
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
       slides[i].style.display = "none";  
    }
    slideIndex++;
    if (slideIndex> slides.length) {slideIndex = 1}    
    for (i = 0; i < dots.length; i++) {
        dots[i].className = dots[i].className.replace(" active", "");
    }
    slides[slideIndex-1].style.display = "block";  
    dots[slideIndex-1].className += " active";
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html> 