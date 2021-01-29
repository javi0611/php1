<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

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




 

</style>
</head>
<body>

<h style="font-size:40px;font-family:times new roman;color:green;">
<center>Contact</center></h>




      
     
        <h2>Javier Villegas</h2>
        <p class="title">Student</p>
        <p>432-000-0001</p>
        <p>Villegas@example.com</p>
        
      </div>
    </div>
  </div>

  
      
      
        <h2>Aaron - Rodriguez</h2>
        <p class="title">Student</p>
        <p>432-000-0002</p>
        <p>Aaron@example.com</p>
        
      </div>
    </div>
  </div>
  
  
      
      
        <h2>Sam</h2>
        <p class="title">Student</p>
        <p>432-000-0003</p>
        <p>Sam@example.com</p>
        
      </div>
    </div>
  </div>
</div>

</body>
</html>