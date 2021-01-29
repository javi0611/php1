
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "rainforest"; 

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

 //Check connection
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}
session_start(); 
$total_price = $_SESSION['Total'];
 $user = $_SESSION['user'];


$shipfname = $_POST['Shipping_Fname'];
$shiplname = $_POST['Shipping_Lname'];
$shipaddress = $_POST['Shipping_Address'];
$shipcity = $_POST['Shipping_City'];
$shipstate = $_POST['Shipping_State'];
$shipzipcode = $_POST['Shipping_Zipcode'];
$shipemail = $_POST['Shipping_Email'];

$billfname = $_POST['Billing_Fname'];
$billlname = $_POST['Billing_Lname'];
$billcity = $_POST['Billing_City'];
$billstate = $_POST['Billing_State'];
$billzipcode = $_POST['Billing_Zipcode'];
$billemail = $_POST['Billing_Email'];
$billaddress = $_POST['Billing_Address'];

$payname = $_POST['Name'];
$paycredit = $_POST['Credit_Card'];
$paymonth = $_POST['Ex_Month'];
$payyear = $_POST['Ex_Year'];
$paycvv = $_POST['Cvv'];




	$sql = "INSERT INTO Orders (Username,Shipping_Fname, Shipping_Lname, Shipping_Address, Shipping_City, Shipping_State, Shipping_Zipcode, Shipping_Email,
							    Billing_Fname, Billing_Lname, Billing_Address, Billing_City, Billing_State, Billing_Zipcode, Billing_Email, Total) 
		
		    VALUES ('$user','$shipfname', '$shiplname', '$shipaddress', '$shipcity', '$shipstate', '$shipzipcode', '$shipemail',
				   '$billfname', '$billlname', '$billaddress', '$billcity', '$billstate', '$billzipcode', '$billemail', '$total_price')";
if($conn->query($sql)== TRUE)
{
	$sql = "INSERT INTO Payment (Username, Name, Credit_Card, Ex_Month, Ex_Year, Cvv, Total) 

		    VALUES('$user','$payname', '$paycredit', '$paymonth', '$payyear', '$paycvv', '$total_price')";
}


		
if ($conn->query($sql) === TRUE) 
{
    echo "Your order is processing. Thank You for choosing Rainforest
		  Please do not refresh the page it will referesh in 10 seconds.";
} 
else 
{
    echo "Error: " . $sql . "<br>" . $conn->error;
}

header("refresh:10 ; url = orderConfirmation.php");
$conn->close();
?>
