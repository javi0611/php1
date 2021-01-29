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
  background-color: #0071CE;
  color: #FFC220;
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
  background-image: url("walmart1.jpg");
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
      <img src="walmart.jpg" height = "350" alt="Books" style="width:50%">
      <div class="container">
        <h2>Walmart</h2>
        <p>2450 NW Loop 338 State Rte W</p>
		<p>(432)332-6016</p>
         <a href="http://www.walmart.com">http://www.walmart.com</a>
        
        

    </div>
	
	<!-- controls the button called check overall stock -->
	<div class="product-stock">
			<form  method="post" action="">
			<div class="product">
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
  
  <h1><img src="parasite.jpg" width="200" height="200"></h1>
 
  <p class="price">$20</p>
  <p>A poor family, the Kims, con their way into becoming the servants 
  of a rich family, the Parks. But their easy life gets complicated when 
  their deception is threatened with exposure.</p>
			<div class="product-item">
			
			<form method="post" action=""> <!-- action="index.php?action=add&pid=21" -->
			<div class="product-tile-footer">
			<div class="cart-action"><input type="text" class="product-quantity" name="quantity" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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
			<div class="product-pulp">
			<form  id= "pulp" method="post" action="">
			<div class="productpulp">
			<div class="cartpulp"><input type="text" class="product-quantitypulp" name="quantitypulp" value="1" size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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
			<div class="product-good">
			<form id= "good" method="post" action="">
			<div class="productgood">
			<div class="cartgood"><input type="text" class="product-quantitygood" name="quantitygood" value="1"  size="2" /><input type="submit" value="Add to Inventory" class="btnAddAction" /></div>
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

					if(isset($_POST['quantity']))
					{
						$quantity = $_POST['quantity'];
						$query = "UPDATE vendor 
								SET Parasite_Stock = $quantity + Parasite_Stock
	                            WHERE VendorID = 369"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['quantitypulp']))
					{
						$quantitypulp = $_POST['quantitypulp'];
						$query = "UPDATE vendor 
								SET Pulp_Stock =  $quantitypulp + Pulp_Stock
	                            WHERE VendorID = 369"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['quantitygood']))
					{
						$quantitygood = $_POST['quantitygood'];
						$query = "UPDATE vendor 
								SET Goodfellas_Stock = $quantitygood + Goodfellas_Stock
	                            WHERE VendorID = 369"; 
						mysqli_query($con, $query);
					}
					
					if(isset($_POST['stock']))
					{
						$mysqli = new mysqli('localhost', 'root','' ); 
						$query = "SELECT Parasite_Stock, Pulp_Stock, Goodfellas_Stock 
									FROM rainforest.vendor
									WHERE VendorID = 369"; 
								echo '<table border="1" cellspacing="2" cellpadding="10"> 
      <tr> 
          <td> <font face="Arial">Parasite Stock	</font> </td> 
          <td> <font face="Arial">Pulp Stock	</font> </td> 
          <td> <font face="Arial">Goodfellas Stock	</font> </td> 
           
      </tr>';	
	  
	  if ($result = $mysqli->query($query)) {
    while ($row = $result->fetch_assoc()) {
        $field1name = $row["Parasite_Stock"];
        $field2name = $row["Pulp_Stock"];
        $field3name = $row["Goodfellas_Stock"];
   
 
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

