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

	// code for removing product from cart
	case "remove":
		if(!empty($_SESSION["cart_item"])) 
		{
			foreach($_SESSION["cart_item"] as $k => $v)
			{
					if($_GET["SKU"] == $k)
						unset($_SESSION["cart_item"][$k]);						
					if(empty($_SESSION["cart_item"]))
						unset($_SESSION["cart_item"]);
			}
		}
	
	break;
	// code for if cart is empty
	case "empty":
		unset($_SESSION["cart_item"]);
	break;	
}
}
?>
<HTML>
<HEAD>
<TITLE>Simple PHP Shopping Cart</TITLE>
<link href="style.css" type="text/css" rel="stylesheet" />
</HEAD>
<BODY>


<!-- Cart ---->
<div id="shopping-cart">
<div class="txt-heading">Shopping Cart</div>
<a id="btnEmpty" href="index.php?action=empty">Empty Cart</a> 
<?php
if(isset($_SESSION["cart_item"]))
{
    $total_quantity = 0;
    $total_price = 0;

?>	
</form>
<table class="tbl-cart" cellpadding="10" cellspacing="1">
<tbody>
<tr>
<th style="text-align:left;">Name</th>
<th style="text-align:left;">SKU</th>
<th style="text-align:right;" width="5%">Quantity</th>
<th style="text-align:right;" width="10%">Unit Price</th>
<th style="text-align:center;" width="12%">Price</th>
<th style="text-align:center;" width="5%">Remove</th> 
</tr>	
<?php		
    foreach ($_SESSION["cart_item"] as $item)
	{

        $item_price = $item["quantity"]*$item["Price"];
		?>
				<tr>
				<td><img src="<?php echo $item["Description"]; ?>"width="100" height="100" class="cart-item-image" /><?php echo $item["Name"]; ?></td>
				<td><?php echo $item["SKU"]; ?></td>
				<td  style="text-align:right;"><?php echo $item["quantity"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ".$item["Price"]; ?></td>
				<td  style="text-align:right;"><?php echo "$ ". number_format($item_price,2); ?></td>
				<td  style="text-align:center;"><a href="index.php?action=remove&SKU=<?php echo $item["SKU"]; ?>" class="btnRemoveAction"><img src="icon-delete.png" alt="Remove Item" /></a></td>
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
</div>


<style>
.button
 {
  background-color: #4CAF50;
  border: none;
  color: white;
  padding: 5px 15px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  font-size: 13px;
  margin: 4px 2px;
  cursor: pointer;
 }
</style>   

 <button <a href="#Rainforest" onclick='window.location.href = "rainforest.php"' class="button">Continue Shopping</a></button>
<button <a href="#Checkout" onclick='window.location.href = "checkout.php"' class="button">Checkout</a></button>

</div>  

</BODY>
</HTML>