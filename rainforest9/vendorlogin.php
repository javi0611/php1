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
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
body {
  font-family: Arial, Helvetica, sans-serif;
  background-color: white;
}

* {
  box-sizing: border-box;
}

/* Add padding to containers */
.container {
  padding: 16px;
  background-color: white;
}

/* Full-width input fields */
input[type=text], input[type=password] {
  width: 100%;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: #f1f1f1;
}

input[type=text]:focus, input[type=password]:focus {
  background-color: #ddd;
  outline: none;
}

/* Overwrite default styles of hr */
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}

/* Set a style for the submit button */
.registerbtn {
  background-color: #4CAF50;
  color: white;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}

.registerbtn:hover {
  opacity: 1;
}

/* Add a blue text color to links */
a {
  color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
  background-color: #f1f1f1;
  text-align: center;
}
</style>  
</head>  
<body>  

  <h1>Vendor Login</h1>
    <p>Please fill in this form to enter your account.</p>
 <form action="" method="POST">  
    <legend>  
    <fieldset> 
          
ID: <input type="Password" name="ID"><br />  
Name of location: <input type="text" name="pass"><br />   
<input type="submit" value="Submit" name="submit" />  
<input type="submit" value="Password Recovery" name="password" />  
       
			  
        </fieldset>  
        </legend>  
</form>  

  
<?php 
if(isset($_POST["password"]))
{
	header('location: recovery.php');
}

if(isset($_POST["submit"])){  
  
if(!empty($_POST['ID']) && !empty($_POST['pass'])) {  
    $num=$_POST['ID'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    // mysqli_select_db('user_registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT * FROM rainforest.Vendor WHERE VendorID='".$num."' AND Vendor_Name='".$pass."'");  
   
    $numrows=mysqli_num_rows($query);  
  
    if($numrows!=0)  
    {  
    while($row=mysqli_fetch_assoc($query))  
    {  
    $dbusername=$row['VendorID'];  
    $dbpassword=$row['Vendor_Name'];  
    }  
  
    if($num == $dbusername && $pass == $dbpassword)  
    {  
    session_start();  
    $_SESSION['num']=$num;
	
	
  
    /* Redirect browser */  
    switch ($pass) {
    case "Walmart":
        header('location: VendorPage.php');
        break;
    case "BestBuy":
        header('location: VendorPage2.php');
        break;
    case "Barnes_Nobles":
        header('location: VendorPage3.php');
}  
    }  
    } else {  
    echo "Invalid username or Password!";  
    }  
  
} else {  
    echo "All fields are required!";  
}  
}  
?> 

 
</body>  
</html>   