fdsljfdsjf
<?php  
//action.php
$connect = mysqli_connect('localhost', 'root', '', 'rainforest');

$input = filter_input_array(INPUT_POST);


$Password = mysqli_real_escape_string($connect, $input["Password"]);
$First_Name = mysqli_real_escape_string($connect, $input["First_Name"]);
$Last_Name = mysqli_real_escape_string($connect, $input["Last_Name"]);
$Email_Address = mysqli_real_escape_string($connect, $input["Email_Address"]);
$Physical_Address = mysqli_real_escape_string($connect, $input["Physical_Address"]);
$County = mysqli_real_escape_string($connect, $input["County"]);
$City = mysqli_real_escape_string($connect, $input["City"]);
$Zipcode = mysqli_real_escape_string($connect, $input["Zipcode"]);
$Phone = mysqli_real_escape_string($connect, $input["Phone"]);


if($input["action"] === 'edit')
{
 $query = "
 UPDATE registration
 SET Password = '".$Password."', 
 First_Name = '".$First_Name."',
 Last_Name = '".$Last_Name."',
 Email_Address = '".$Email_Address."' , 
 Physical_Address = '".$Physical_Address."' , 
 County = '".$County."', 
 City = '".$City."', 
 Zipcode = '".$Zipcode."' , 
 Phone = '".$Phone."' 
 WHERE Username = '".$input["Username"]."'

 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'edit')
{
 $query = "
 UPDATE customer
 SET First_Name = '".$First_Name."',
 Last_Name = '".$Last_Name."',
 Email_Address = '".$Email_Address."',
 Physical_Address = '".$Physical_Address."',
 Password = '".$Password."' 
 
 WHERE Username = '".$input["Username"]."'

 ";

 mysqli_query($connect, $query);

}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM registration 
 WHERE Username = '".$input["Username"]."'
 ";
 mysqli_query($connect, $query);
}

if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM customer 
 WHERE Username = '".$input["Username"]."'
 ";
 mysqli_query($connect, $query);
}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM orders 
 WHERE Username = '".$input["Username"]."'
 ";
 mysqli_query($connect, $query);
}
if($input["action"] === 'delete')
{
 $query = "
 DELETE FROM payment 
 WHERE Username = '".$input["Username"]."'
 ";
 mysqli_query($connect, $query);
}
mysqli_close($mysqli);


?>
