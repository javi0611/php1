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
  background-color: #F7ED00;
  color: #010101;
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
  background-image: url("bestbuy1.jpg");
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
      <img src="BestBuy.jpg" height = "350" alt="Books" style="width:50%">
      <div class="container">
        <h2>Best Buy</h2>
        <p>2450 NW Loop 338 State Rte W</p>
		<p>(432)332-6016</p>
        <a href="http://www.bestbuy.com">http://www.bestbuy.com</a>
        
        
      
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
			<div class="product-iphone">
			<form method="post" action="">
			<div class="productiphone">
			<div class="cart-iphone"><input type="text" class="product-quantity" name="quantityiphone" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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
			<div class="product-lenovo">
			<form method="post" action="">
			<div class="productlenovo">
			<div class="cart-action"><input type="text" class="product-lenovo" name="quantitylenovo" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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
			<div class="product-beats">
			<form method="post" action="">
			<div class="productbeats">
			<div class="cart-beats"><input type="text" class="product-beats" name="quantitybeats" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
			</div>
			</form>
  
</div>
   
</div>


<?php 
			$con = mysqli_connect("localhost", "root", "", "rainforest"); 
			if($con === false)
			{ 
				die("ERROR: Could not connect. "  
                . mysqli_connect_error()); 
			} 

					if(isset($_POST['quantityiphone']))
					{
						$quantityiphone = $_POST['quantityiphone'];
						$query = "UPDATE vendor 
								SET iPhone_Stock = $quantityiphone + iPhone_Stock
	                            WHERE VendorID = 137"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['quantitylenovo']))
					{
						$quantitylenovo = $_POST['quantitylenovo'];
						$query = "UPDATE vendor 
								SET Workstation_Stock =  $quantitylenovo + Workstation_Stock
	                            WHERE VendorID = 137"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['quantitybeats']))
					{
						$quantitybeats = $_POST['quantitybeats'];
						$query = "UPDATE vendor 
								SET Headphones_Stock = $quantitybeats + Headphones_Stock
	                            WHERE VendorID = 137"; 
						mysqli_query($con, $query); 
					}
				
				if(isset($_POST['stock']))
					{
						$mysqli = new mysqli('localhost', 'root','' ); 
						$query = "SELECT iPhone_Stock, Workstation_Stock, Headphones_Stock 
									FROM rainforest.vendor
									WHERE VendorID = 137"; 
								echo '<table border="1" cellspacing="2" cellpadding="10"> 
      <tr> 
          <td> <font face="Arial">iPhone Stock	</font> </td> 
          <td> <font face="Arial">Lenovo Stock	</font> </td> 
          <td> <font face="Arial">Beats Stock	</font> </td> 
           
      </tr>';	
	  
	  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["iPhone_Stock"];
        $field2name = $row["Workstation_Stock"];
        $field3name = $row["Headphones_Stock"];
   
 
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