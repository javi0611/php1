<!DOCTYPE html>

<h style="font-size:80px;font-family:times new roman;color:#8AFB17;">
<center>Rainforest</center></h>

<!-- adds the background to the site -->
<style>
body 
{
  background-image: url('rain.jpg');
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-size: 100% 100%;

}
</style> 


<!-- start of the tab right below rainforest-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  display: block;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4CAF50;
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}
</style>
</head>
<body>
<!-- this shows the current user currently logged in -->
<?php 
session_start();     
if (!isset($_SESSION['user'])) {
   echo ''; 
} else {
	
echo '&#9925; Welcome '.$_SESSION['user'];
 

}
?>




<div class="topnav" id="myTopnav">
  
  
  <a href="#rainforest" onclick='window.location.href = "rainforest.php"' class="active">Home</a>
  <a href="#Customer Login" onclick='window.location.href = "customerlogin.php"' class="active">Customer Login</a> 
  <a href="#Vendor Login" onclick='window.location.href = "vendorlogin.php"' class="active">Vendor Login</a>
  <a href="#Register" onclick='window.location.href = "signup.php"' class="active">Register</a>
  <a href="#News" onclick='window.location.href = "News.php"' class="active">News</a>
  <a href="#Contact" onclick='window.location.href = "contact.php"' class="active">Contact</a>
  <a href="#about" onclick='window.location.href = "about.php"' class="active">About</a>
  <a href="#Logout" onclick='window.location.href = "logout.php"' class="active">Logout</a>
  <a href="#Index.php" onclick='window.location.href = "index.php"' class="active">Cart</a>
  <a href="#view" onclick='window.location.href = "view.php"' class="active">View Your Account</a>
  <a href="#Index1" onclick='window.location.href = "Index1.php"' class="active">Edit Your Account</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	
  </a>
</div>
<!--
<form action="view.php" method="POST">
<input type="submit" value="View" name="submit" style="display: block; float:right; margin: 0px;  width: 40px; height: 30px; padding: 0px; "  />
</form>
-->
<script>
function myFunction() 
{
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") 
  {
    x.className += " responsive";
  } else 
  {
    x.className = "topnav";
  }
}
</script>

</body>



<!-- start of the category tab -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: "Lato", sans-serif;}

/* Style the tab */
.tab 
{
  float: left;
  border: 1px solid #ccc;
  background-color: #f1f1f1;
  width: 30%;
  height: 400px;
}

/* Style the buttons inside the tab */
.tab button 
{
  display: block;
  background-color: inherit;
  color: black;
  padding: 22px 16px;
  width: 100%;
  border: none;
  outline: none;
  text-align: left;
  cursor: pointer;
  transition: 0.3s;
  font-size: 17px;
}

/* Change background color of buttons on hover */
.tab button:hover 
{
  background-color: #ddd;
}

/* Create an active/current "tab button" class */
.tab button.active 
{
  background-color: #ccc;
}

/* Style the tab content */
.tabcontent 
{
  float: left;
  padding: 0px 12px;
  border: 1px solid #ccc;
  width: 70%;
  border-left: none;
  height: 2000px; <!-- this controls how long the website is if you change it you notice the scrolling gets longer -->
}
</style>
</head>

<!-- picture changer starts here -->
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {box-sizing: border-box}
body {font-family: Verdana, sans-serif; margin:0}
.mySlides {display: none}
img {vertical-align: middle;}

/* Slideshow container */
.slideshow-container {
  max-width: 250px;
  position: relative;
  margin: auto;
}

/* Next & previous buttons */
.prev, .next {
  cursor: pointer;
  position: absolute;
  top: 50%;
  width: auto;
  padding: 16px;
  margin-top: -22px;
  color: white;
  font-weight: bold;
  font-size: 18px;
  transition: 0.6s ease;
  border-radius: 0 3px 3px 0;
  user-select: none;
}

/* Position the "next button" to the right */
.next {
  right: 0;
  border-radius: 3px 0 0 3px;
}

/* On hover, add a black background color with a little bit see-through */
.prev:hover, .next:hover {
  background-color: rgba(0,0,0,0.8);
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
  cursor: pointer;
  height: 15px;
  width: 15px;
  margin: 0 2px;
  background-color: #bbb;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active, .dot:hover {
  background-color: #717171;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
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
  .prev, .next,.text {font-size: 11px}
}
</style>
</head>
<body>

<div class="slideshow-container">

<div class="mySlides fade">
  <img src="good.jpg" height = "350" style="width:100%">
  
</div>

<div class="mySlides fade">
  <img src="iphone.jpg" height = "350" style="width:100%">
  <!-- <div class="text">Caption Two</div> -->
</div>

<div class="mySlides fade">
  <img src="networking.jpg" height = "350" style="width:100%">
</div>

<div class="mySlides fade">
  <img src="beats.jpg" height = "350" style="width:100%">
</div>

<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 

</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>

</body>
   <!-- end of the picture changer -->


<body> 

<h style="font-size:40px;font-family:times new roman;color:green;">
<center>Categories</center></h>

<p><center>Select the tabs to choose your choice of items:</center></p>

<div class="tab">
  <button class="tablinks" onclick="openCity(event, 'Books')" id="defaultOpen">Books</button>
  <button class="tablinks" onclick="openCity(event, 'Electronics')">Electronics</button>
  <button class="tablinks" onclick="openCity(event, 'Movies')">Movies</button>
</div>

<div id="Books" class="tabcontent">
  
  <!-- This starts the style control for books tab and its contents -->
  <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
<!-- This ends the style control for the book tabs -->
<!-- below starts the products for each individual products -->

<div class="card">

   <h><img src="hacking.jpg" width="200" height="200" ></h>
   
  <p class="price">$20</p>
  <p>Hacking is the art of creative problem solving, whether that means 
  finding an unconventional solution to a difficult problem or exploiting 
  holes in sloppy programming. Many people call themselves hackers, but few 
  have the strong technical foundation needed to really push the envelope.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=15">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
  
</div>
</div>

<div class="card">

  <h1><img src="networking.jpg" width="200" height="200"></h1>

  <p class="price">$35</p>
  <p>Motivates readers with a top-down, layered approach to computer networking
Unique among computer networking texts, the Seventh Edition of the popular Computer Networking: A Top Down Approach 
builds on the authors long tradition of teaching this complex subject through a layered approach in a top-down manner.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=16">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
 
 </div>
 </div>
 
<div class="card">

  <h1><img src="science.jpg" width="200" height="200"></h1>
  
  <p class="price">$40</p>
  <p>Robert Sedgewick and Kevin Waynes  Computer Science: An Interdisciplinary Approach  is the ideal
  modern introduction to computer science with Java programming for both students and professionals. Taking a 
  broad, applications-based approach, Sedgewick and Wayne teach through important examples from science, mathematics, 
  engineering, finance, and commercial computing.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=17">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>


			
</div>
   
</div>
  
</div>
<!-- this ends the tab for books -->


<div id="Electronics" class="tabcontent">
  
    <style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>
<!-- This ends the style control for the book tabs -->
<!-- below starts the products for each individual products -->
<div class="card">

   <h><img src="iphone.jpg" width="200" height="200" ></h>
  
  <p class="price">$1100</p>
  <p>Introducing the iPhone 11 Pro Max. A transformative 
  triple-camera system that adds tons of capability without 
  complexity. An unprecedented leap in battery life. And a 
  mind-blowing chip that doubles down on machine learning 
  and pushes the boundaries of what a smartphone can do. Welcome 
  to the first iPhone powerful enough to be called Pro.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=18">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
</div>
</div>

<div class="card">

  <h1><img src="lenovo.jpg" width="200" height="200"></h1>
  
  <p class="price">$839</p>
  <p>The P330 Tiny workstation delivers the performance and 
  speed to power through tasks with up to 8 cores per CPU, 
  the latest generation of Intel Core processing combines 
  blazing-fast memory with dual M.2 storage support. Plus, 
  the P330 Tiny is primed for security with data encryption 
  through TPM and a door to internal components that physically locks.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=19">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
  
  
  
</div>
</div>
 
<div class="card">

  <h1><img src="beats.jpg" width="200" height="200"></h1>
  
  <p class="price">$150</p>
  <p>High-performance wireless Bluetooth headphones in black
  Features the Apple W1 chip and Class 1 wireless Bluetooth connectivity
  With up to 40 hours of battery life, Beats Solo3 wireless is your 
  perfect everyday headphone</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=20">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
  
</div>
   
</div>
</div>

<div id="Movies" class="tabcontent">

<style>
.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  max-width: 300px;
  margin: auto;
  text-align: center;
  font-family: arial;
}

.price {
  color: grey;
  font-size: 22px;
}

.card button {
  border: none;
  outline: 0;
  padding: 12px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
  font-size: 18px;
}

.card button:hover {
  opacity: 0.7;
}
</style>

  <div class="card">
  
  <h1><img src="parasite.jpg" width="200" height="200"></h1>
 
  <p class="price">$20</p>
  <p>A poor family, the Kims, con their way into becoming the servants 
  of a rich family, the Parks. But their easy life gets complicated when 
  their deception is threatened with exposure.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=21">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
  </div>
  </div>
  
  <div class="card">
  
  <h1><img src="pulp.jpg" width="200" height="200"></h1>
 
  <p class="price">$10</p>
  <p>The lives of two mob hitmen, a boxer, a gangster 
  and his wife, and a pair of diner bandits intertwine 
  in four tales of violence and redemption.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=22">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
  </div>
  </div>
  
  <div class="card">
  
  <h1><img src="good.jpg" width="200" height="200"></h1>
 
  <p class="price">$15</p>
  <p>The story of Henry Hill and his life in the mob, 
  covering his relationship with his wife Karen Hill 
  and his mob partners Jimmy Conway and Tommy DeVito 
  in the Italian-American crime syndicate.</p>
			<div class="product-item">
			<form method="post" action="index.php?action=add&pid=23">
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Cart" class="btnAddAction" /></div>
			</div>
			</form>
  </div>
  
  
  
</div>

<script>
function openCity(evt, cityName) {
  var i, tabcontent, tablinks;
  tabcontent = document.getElementsByClassName("tabcontent");
  for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
  }
  tablinks = document.getElementsByClassName("tablinks");
  for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
  }
  document.getElementById(cityName).style.display = "block";
  evt.currentTarget.className += " active";
}

// Get the element with id="defaultOpen" and click on it
document.getElementById("defaultOpen").click();
</script>
   


</html>
