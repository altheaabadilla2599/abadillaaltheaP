

<!DOCTYPE html>
<html>


<link rel="stylesheet" type="text/css" href="css/logo.css">
<title>Creamy Creations</title>


<div class="topnav"> 
 <div class="topnav-centered"> 

  <a  href="index.php">HOME</a>
  <a href="index.php">ABOUT US</a>
  <a href="index.php">PRODUCTS</a>
  <a href="index.php">CONTACT US</a>
  </div>
  </div>



<div id="first-layer">

  <div class="frosting1"></div>
     <div class="frosting11" ></div>
	 <div class="frosting111" ></div>
	 <div class="frosting1111" ></div>
	 <div class="frosting0" ></div>
	  <div class="frosting00" ></div>
	   <div class="frosting000" ></div>
	
</div>
<div id="second-layer">
  <div class="frosting2" id="frosting2"></div>
</div>
  <div id="last-layer">
    <div class="frosting3" id="frosting3"></div>
 </div>
 
  <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="css/cake.css">
<style>
.mySlides {display:none;}
</style>
<body>

<h2 class="w3-center">Creamy Creations</h2>

<div class="w3-content w3-display-container">
  <img class="mySlides" src="cake.jpg" style="width:100%">
  <img class="mySlides" src="cake2.jpg" style="width:100%">
  <img class="mySlides" src="cake3.jpg" style="width:100%">
 

  <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div>
<br>
<br>









<div class="footer">   Lorem Ipsum Lorem Ipsum Lorem Ipsum <br> Lorem Ipsum Lorem Ipsum Lorem Ipsum <br>  Lorem Ipsum Lorem Ipsum Lorem Ipsum
 <br>Lorem Ipsum Lorem Ipsum Lorem Ipsum
 
 <div class="scoop1"></div>
<div class="scoop2"></div>
<div class="scoop3"></div>
<div class="cone"></div>
</div>



<div class="footer1">© Copyright 2019 |  All rights Reserved Creamy Creations </div>







<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  x[slideIndex-1].style.display = "block";  
}
</script>
 
 
 
 





</html>