<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
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

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>
* {
  box-sizing: border-box;
}

body {
  background-color: #474e5d;
  font-family: Helvetica, sans-serif;
}

/* The actual timeline (the vertical ruler) */
.timeline {
  position: relative;
  max-width: 1200px;
  margin: 0 auto;
}

/* The actual timeline (the vertical ruler) */
.timeline::after {
  content: '';
  position: absolute;
  width: 6px;
  background-color: white;
  top: 0;
  bottom: 0;
  left: 50%;
  margin-left: -3px;
}

/* Container around content */
.container {
  padding: 10px 40px;
  position: relative;
  background-color: inherit;
  width: 50%;
}

/* The circles on the timeline */
.container::after {
  content: '';
  position: absolute;
  width: 25px;
  height: 25px;
  right: -17px;
  background-color: white;
  border: 4px solid #FF9F55;
  top: 15px;
  border-radius: 50%;
  z-index: 1;
}

/* Place the container to the left */
.left {
  left: 0;
}

/* Place the container to the right */
.right {
  left: 50%;
}

/* Add arrows to the left container (pointing right) */
.left::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  right: 30px;
  border: medium solid white;
  border-width: 10px 0 10px 10px;
  border-color: transparent transparent transparent white;
}

/* Add arrows to the right container (pointing left) */
.right::before {
  content: " ";
  height: 0;
  position: absolute;
  top: 22px;
  width: 0;
  z-index: 1;
  left: 30px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
}

/* Fix the circle for containers on the right side */
.right::after {
  left: -16px;
}

/* The actual content */
.content {
  padding: 20px 30px;
  background-color: white;
  position: relative;
  border-radius: 6px;
}

/* Media queries - Responsive timeline on screens less than 600px wide */
@media screen and (max-width: 600px) {
  /* Place the timelime to the left */
  .timeline::after {
  left: 31px;
  }
  
  /* Full-width containers */
  .container {
  width: 100%;
  padding-left: 70px;
  padding-right: 25px;
  }
  
  /* Make sure that all arrows are pointing leftwards */
  .container::before {
  left: 60px;
  border: medium solid white;
  border-width: 10px 10px 10px 0;
  border-color: transparent white transparent transparent;
  }

  /* Make sure all circles are at the same spot */
  .left::after, .right::after {
  left: 15px;
  }
  
  /* Make all right containers behave like the left ones */
  .right {
  left: 0%;
  }
}
</style>
</head>
<body>

<div class="timeline">
  <div class="container left">
    <div class="content">
      
      <p>The completed project should be done by the time the deadline comes.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
       <p>Showing our project to the professor after spring break, and working out the detail of combining the html with the project.</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      
      
      <p>Completing the tast that do not require the database, for we can start the main focus of the project.</p>
    </div>
  </div>
  <div class="container right">
    <div class="content">
     
      <p>Producing a new database by the end of spring break</p>
    </div>
  </div>
  <div class="container left">
    <div class="content">
      
      <p>Sam started the program making the html first. It was started out from scatch.</p>
    </div>
  </div>
</div>

</body>
</html>