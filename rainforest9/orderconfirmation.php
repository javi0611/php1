<?php
session_start();
require_once("config.php");


//code for Cart
if(!empty($_GET["action"])) 
{
switch($_GET["action"]) 
{
	//code for adding product in cart
	case "add":		
		if(!empty($_POST["quantity"])) 
		{
			$pid=$_GET["pid"];
			$result=mysqli_query($con,"SELECT Name, Price, SKU, Description  FROM products WHERE ProductID='$pid'");
	          while($productBySKU=mysqli_fetch_array($result))
			  {
			$itemArray = array($productBySKU["SKU"]=>array('Name'=>$productBySKU["Name"], 'SKU'=>$productBySKU["SKU"], 'quantity'=>$_POST["quantity"], 'Price'=>$productBySKU["Price"], 'Description'=>$productBySKU["Description"]));
			if(!empty($_SESSION["cart_item"])) 
			{
				if(in_array($productBySKU["SKU"],array_keys($_SESSION["cart_item"]))) 
				{
					foreach($_SESSION["cart_item"] as $k => $v) 
					{
							if($productBySKU["SKU"] == $k) 
							{
								if(empty($_SESSION["cart_item"][$k]["quantity"])) 
								{
									$_SESSION["cart_item"][$k]["quantity"] = 0;
								}
								$_SESSION["cart_item"][$k]["quantity"] += $_POST["quantity"];
							}
					}
				} else 
				{
					$_SESSION["cart_item"] = array_merge($_SESSION["cart_item"],$itemArray);
				}
			}  else
				{
				$_SESSION["cart_item"] = $itemArray;
			    }
		}
	}
	break;

		
}
}
?>
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

.card {
  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
  margin: 8px;
}

.about-section {
  padding: 50px;
  text-align: center;
  background-color: #4CAF50;
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
.img {
    width: 100px;
    height: 100px;
}
@media screen and (max-width: 650px) {
  .column {
    width: 100%;
    display: block;
	

  }
  
}
</style>
</head>
<body>

<div class="about-section">
  <h1 style="color: green; font-size:60px" >Rainforest</h1>
 <p style="color: yellow; font-size:30px" >Your order is confirmed</p>

 <p style="color: white; font-size:30px" >Thanks for shopping with us at Rainforest we will hope that you will return!</p>
  
</div>
<!-- Cart ---->
<div id="shopping-cart">
 
<?php
if(isset($_SESSION["cart_item"]))
{
    $total_quantity = 0;
    $total_price = 0;

?>	
</form>
<table class="tbl-cart" cellpadding="10" cellspacing="10">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">SKU</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:center;" width="12%">Price</th>
 
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item)
	{

        $item_price = $item["quantity"]*$item["Price"];
		?>
				<tr>
				<td><img src="<?php echo $item["Description"]; ?>" width="100" height="100" class="cart-item-image" /><?php echo $item["Name"]; ?></td>
				<td><?php echo $item["SKU"]; ?></td>
				<td  style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["Price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				
				</tr>
				<?php
				$total_quantity += $item["quantity"];
				$total_price += ($item["Price"]*$item["quantity"]);
				

		}
		?>
<form action="payment.php" method="post"> <!-- test pass to payment -->
<tr>
<td colspan="2" align="right">Total:</td>
<td align="right" <input type="text" id="Quantity" name="Quantity"><?php echo $total_quantity; ?></td>

<!--<td align="right" <.?php echo $total_quantity; ?.></td>     take the dots away from php to make it work as well as the bottom code-->
<td align="right" colspan="2" <input type="text" id="Total_Price" name="Total_Price"><strong><?php echo "$ ".number_format($total_price, 2); ?></strong></td>
<!--<td align="right" colspan="2"><strong><.?php echo "$ ".number_format($total_price, 2); ?></strong></td> -->
<?php $_SESSION['Total'] = $total_price ?>
<td></td>
</tr>
</form> <!-- test -->

</tbody>
</table>		
  <?php
} else 
{
?>
<div class="no-records">Your Cart is Empty</div>
<?php 
}
?>
<form>
<input type="button" value="Print this page" onClick="window.print()">
</form>
</body>
</html>



