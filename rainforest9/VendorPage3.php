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
  <a href="#view" onclick='window.location.href = "view.php"' class="active">View Your Account</a>
  <a href="#Index1" onclick='window.location.href = "Index1.php"' class="active">Edit Your Account</a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
	
  </a>
</div>




</body>




 

</style>
</head>
<body>

<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  margin: 0;
}

html {
  box-sizing: border-box;
}

*, *:before, *:after {
  box-sizing: inherit;
}

.column {
  float: left;
  width: 33.3%;
  margin-bottom: 16px;
  padding: 0 8px;
}
.card1 {
  background-color: #366251;
  color: #C6BEB0;
  margin: 20px;
  padding: 20px;
}

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  
  padding: 50px;
  text-align: center;
  background-image: url("bookv.jpg");
  background-color: 	white;
  color: white;
}

.container {
  padding: 0 16px;
}

.container::after, .row::after {
  content: "";
  clear: both;
  display: table;
}

.title {
  color: grey;
}

.button {
  border: none;
  outline: 0;
  display: inline-block;
  padding: 8px;
  color: white;
  background-color: #000;
  text-align: center;
  cursor: pointer;
  width: 100%;
}

.button:hover {
  background-color: #555;
}

@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
  
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
}}
}
</style>
</head>
<body>

<div class="about-section">

    <div class="card1">
      <img src="Barns.jpg" height = "350" alt="Books" style="width:50%">
      <div class="container">
        <h2>Barnes&Nobles</h2>
        <p>2617 Loop 250 Frontage Rd, Midland, TX 79705</p>
		<p>(432) 682-8880</p>
        <p><a href="https://www.barnesandnoble.com/">https://www.barnesandnoble.com/</a></p>
        
        
      
    </div>
	
	<!-- controls the button called check overall stock -->
	<div class="product-stock">
			<form  method="post" action="">
			<div class="productpulp">
			<div class="cartstock"><input type="submit" name ="stock" value="Check Overall Stock" class="btnAddAction" /></div>
			</div>
			</form>				
    </div>
	<!-- end of button for check overall stock -->
	
	
	
	
	
  </div> 
</div>
<style>
.btn-group button {
  background-color: #4CAF50; /* Green background */
  border: 1px solid green; /* Green border */
  color: white; /* White text */
  padding: 10px 24px; /* Some padding */
  cursor: pointer; /* Pointer/hand icon */
  float: left; /* Float the buttons side by side */
}

/* Clear floats (clearfix hack) */
.btn-group:after {
  content: "";
  clear: both;
  display: table;
}

.btn-group button:not(:last-child) {
  border-right: none; /* Prevent double borders */
}

/* Add a background color on hover */
.btn-group button:hover {
  background-color: #3e8e41;
}
</style>
<body>

<h1>Categories</h1>

<div class="card">

   <h><img src="hacking.jpg" width="200" height="200" ></h>
   
  <p class="price">$20</p>
  <p>Hacking is the art of creative problem solving, whether that means 
  finding an unconventional solution to a difficult problem or exploiting 
  holes in sloppy programming. Many people call themselves hackers, but few 
  have the strong technical foundation needed to really push the envelope.</p>
			<div class="product-hacking">
			<form method="post" action="">
			<div class="producthacking">
			<div class="cart-hacking"><input type="text" class="product-hacking" name="quantityhacking" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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
			<div class="product-networking">
			<form method="post" action="">
			<div class="productnetworking">
			<div class="cart-networking"><input type="text" class="product-networking" name="quantitynetworking" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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
			<div class="product-science">
			<form method="post" action="">
			<div class="productscience">
			<div class="cart-science"><input type="text" class="product-science" name="quantityscience" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
			</div>
			</form>


			
</div>
   
</div>
  
</div>

<?php 
			$con = mysqli_connect("localhost", "root", "", "rainforest"); 
			if($con === false)
			{ 
				die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
			} 

					if(isset($_POST['quantityhacking']))
					{
						$quantityhacking = $_POST['quantityhacking'];
						$query = "UPDATE vendor 
								SET Hacking_Stock = $quantityhacking + Hacking_Stock
	                            WHERE VendorID = 237"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['quantitynetworking']))
					{
						$quantitynetworking = $_POST['quantitynetworking'];
						$query = "UPDATE vendor 
								SET Networking_Stock =  $quantitynetworking + Networking_Stock
	                            WHERE VendorID = 237"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['quantityscience']))
					{
						$quantityscience = $_POST['quantityscience'];
						$query = "UPDATE vendor 
								SET Science_Stock = $quantityscience + Science_Stock
	                            WHERE VendorID = 237"; 
						mysqli_query($con, $query);
					}
				
				if(isset($_POST['stock']))
					{
						$mysqli = new mysqli('localhost', 'root','' ); 
						$query = "SELECT Hacking_Stock, Networking_Stock, Science_Stock 
									FROM rainforest.vendor
									WHERE VendorID = 237"; 
								echo '<table border="1" cellspacing="2" cellpadding="10"> 
      <tr> 
          <td> <font face="Arial">Hacking Stock	</font> </td> 
          <td> <font face="Arial">Networking Stock	</font> </td> 
          <td> <font face="Arial">Science Stock	</font> </td> 
           
      </tr>';	
	  
	  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Hacking_Stock"];
        $field2name = $row["Networking_Stock"];
        $field3name = $row["Science_Stock"];
   
 
        echo '<tr> 
                  <td>'.$field1name.'</td> 
                  <td>'.$field2name.'</td> 
                  <td>'.$field3name.'</td> 
                  
              </tr>';
    }
 $result->free();
}
					}	
	
				mysqli_close($con); 

?>






</body>
</html>