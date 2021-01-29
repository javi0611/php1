
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<!-- back to cart -->
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
<button <a href="#Index" onclick='window.location.href = "index.php"' class="button">Back to Cart</a></button>


<style>
body {
  font-family: Arial;
  font-size: 17px;
  padding: 8px;
}

* {
  box-sizing: border-box;
}

.row {
  display: -ms-flexbox; /* IE10 */
  display: flex;
  -ms-flex-wrap: wrap; /* IE10 */
  flex-wrap: wrap;
  margin: 0 -16px;
}

.col-25 {
  -ms-flex: 25%; /* IE10 */
  flex: 25%;
}

.col-50 {
  -ms-flex: 50%; /* IE10 */
  flex: 50%;
}

.col-75 {
  -ms-flex: 75%; /* IE10 */
  flex: 75%;
}

.col-25,
.col-50,
.col-75 {
  padding: 0 16px;
}

.container {
  background-color: #f2f2f2;
  padding: 5px 20px 15px 20px;
  border: 1px solid lightgrey;
  border-radius: 3px;
}

input[type=text], input[type=email], input[type=number] {
  width: 100%;
  margin-bottom: 20px;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 3px;
}

label {
  margin-bottom: 10px;
  display: block;
}

.icon-container {
  margin-bottom: 20px;
  padding: 7px 0;
  font-size: 24px;
}

.btn {
  background-color: #4CAF50;
  color: white;
  padding: 12px;
  margin: 10px 0;
  border: none;
  width: 100%;
  border-radius: 3px;
  cursor: pointer;
  font-size: 17px;
}

.btn:hover {
  background-color: #45a049;
}

a {
  color: #2196F3;
}

hr {
  border: 1px solid lightgrey;
}

span.price {
  float: right;
  color: grey;
}

/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other (also change the direction - make the "cart" column go on top) */
@media (max-width: 800px) {
  .row {
    flex-direction: column-reverse;
  }
  .col-25 {
    margin-bottom: 20px;
  }
}
</style>
</head>
<body>

<?php
//include 'index.php';

?>
<div class="row">
  <div class="col-75">
    <div class="container">
		 <form action="payment.php" method="post">
      
        <div class="row">
          <div class="col-50">
            <h3>Billing Address</h3>
            <label for="Billing_Fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="Billing_Fname" name="Billing_Fname" placeholder="John">
			<label for="Billing_Lname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="Billing_Lname" name="Billing_Lname" placeholder="Doe">
            <label for="Billing_Email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="Billing_Email" name="Billing_Email" placeholder="john@example.com">
            <label for="Billing_Address"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="Billing_Address" name="Billing_Address" placeholder="542 W. 15th Street">
            <label for="Billing_City"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="Billing_City" name="Billing_City" placeholder="Odessa">

            <div class="row">
              <div class="col-50">
                <label for="Billing_State">State</label>
                <input type="text" id="Billing_State" name="Billing_State" placeholder="TX">
              </div>
              <div class="col-50">
                <label for="Billing_Zipcode">Zip</label>
                <input type="number" id="Billing_Zipcode" name="Billing_Zipcode" placeholder="79763">
              </div>
            </div>
          </div>


          <div class="col-50">
            <h3>Payment</h3>
            <label for="Billing_Fname">Accepted Cards</label>
            <div class="icon-container">
              <i class="fa fa-cc-visa" style="color:navy;"></i>
              <i class="fa fa-cc-amex" style="color:blue;"></i>
              <i class="fa fa-cc-mastercard" style="color:red;"></i>
              <i class="fa fa-cc-discover" style="color:orange;"></i>
            </div>
            <label for="cname">Name on Card</label>
            <input type="text" id="Name" name="Name" placeholder="John More Doe">
            <label for="ccnum">Credit card number</label>
            <input type="number" id="Credit_Card" name="Credit_Card" placeholder="1111-2222-3333-4444">
            <label for="expmonth">Exp Month</label>
            <input type="text" id="Ex_Month" name="Ex_Month" placeholder="September">
            <div class="row">
              <div class="col-50">
                <label for="expyear">Exp Year</label>
                <input type="number" id="Ex_Year" name="Ex_Year" placeholder="2018">
              </div>
              <div class="col-50">
                <label for="cvv">CVV</label>
                <input type="number" id="Cvv" name="Cvv" placeholder="352">
              </div>
            </div>
          </div>
          
			<div class="col-50">
            <h3>Shipping Address</h3>
            <label for="Shipping_Fname"><i class="fa fa-user"></i> First Name</label>
            <input type="text" id="Shipping_Fname" name="Shipping_Fname" placeholder="John">
			<label for="lname"><i class="fa fa-user"></i> Last Name</label>
            <input type="text" id="Shipping_Lname" name="Shipping_Lname" placeholder="Doe">
            <label for="email"><i class="fa fa-envelope"></i> Email</label>
            <input type="email" id="Shipping_Email" name="Shipping_Email" placeholder="john@example.com">
            <label for="adr"><i class="fa fa-address-card-o"></i> Address</label>
            <input type="text" id="Shipping_Address" name="Shipping_Address" placeholder="542 W. 15th Street">
            <label for="city"><i class="fa fa-institution"></i> City</label>
            <input type="text" id="Shipping_City" name="Shipping_City" placeholder="Odessa">

            <div class="row">
              <div class="col-50">
                <label for="state">State</label>
                <input type="text" id="Shipping_State" name="Shipping_State" placeholder="TX">
              </div>
              <div class="col-50">
                <label for="zip">Zip</label>
                <input type="number" id="Shipping_Zipcode" name="Shipping_Zipcode" placeholder="79763">
              </div>
            </div>
          </div>
		  
        </div>
        <label>
          <input type="checkbox" checked="checked" name="sameadr"> Shipping address same as billing
        </label>
        <input type="submit" value="Place Order" class="btn">		
      </form>
    </div>
  </div>

</html>

