<!DOCTYPE html>

<h style="font-size:50px;font-family:times new roman;color:green;">
<center>Rainforest</center></h>

<!-- start of the tab right below rainforest-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
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
input[type=text], input[type=password], input[type=number], input[type=email] {
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
     
     

  <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
 <form action="" method="POST">  
    <legend>  
    <fieldset>
	
Username: <input type="text" name="user"><br />  
Password: <input type="password" name="pass" required
       minlength="6"><br />  
First Name: <input type="text" name="first"><br /> 
Last Name: <input type="text" name="last"><br />
Email: <input type="email" name="email"><br />  
Address: <input type="text" name="address"><br /> 
City: <input type="text" name="city"><br /> 
County: <input type="text" name="county"><br />
Zipcode: <input type="number" name="zipcode"><br />
Phone: <input type="number" name="phone"><br />
Password Recovery Phrase: <input type="text" name="recovery"><br />


 	       
  
<input type="submit" value="Submit" name="submit" />  
              
        </fieldset>  
        </legend>  
</form>  
<?php  
if(isset($_POST["submit"])){  
if(!empty($_POST['user']) && !empty($_POST['pass'])&& !empty($_POST['city']) && !empty($_POST['county']) && !empty($_POST['first'])&& !empty($_POST['last']) && !empty($_POST['email'])&& !empty($_POST['address'])&& !empty($_POST['zipcode'])&& !empty($_POST['phone']) && !empty($_POST['recovery']) ) { 										 
    $user=$_POST['user'];
	$User=$_POST['user'];
    $pass=$_POST['pass']; 
	$city=$_POST['city'];
	$county=$_POST['county'];
	$first=$_POST['first'];
	$last=$_POST['last'];
	$email=$_POST['email'];
	$address=$_POST['address'];
	$zipcode=$_POST['zipcode'];
    $phone=$_POST['phone'];
	$recovery=$_POST['recovery'];

    $con=mysqli_connect('localhost','root','') or die(mysqli_error($con));  
   // mysqli_select_db('rainforest') or die("cannot select DB"); 
  
    $query=mysqli_query($con,"SELECT * FROM rainforest.registration WHERE Username='".$user."'");
	$query2=mysqli_query($con,"SELECT * FROM rainforest.customer WHERE Username='".$user."'");  

    $numrows=mysqli_num_rows($query); 
	$numrows2=mysqli_num_rows($query2);
	
	if($numrows == 0)  
    {               //there was an error so I added the database before followed with a dot
					//then the table
    $sql="INSERT INTO rainforest.registration(Username,Password,First_Name,Last_Name,Email_Address,Physical_Address,County,City,Zipcode,Phone, Password_Recovery) VALUES('$user','$pass','$first','$last','$email','$address','$county','$city','$zipcode','$phone', '$recovery')";
	
    $result=mysqli_query($con, $sql);
	
        if($result)
		{ 
		
		echo "Account Successfully Created";
		{
		
		}
			
		} 
		else 
		{  
		echo "Failure!";  
		}  
  
		} else {  
		echo "That username already exists! Please try again with another.";  
		}  
	
} 		else {  
		echo "All fields are required!";  
} 
if($numrows2 == 0)  
    {               //there was an error so I added the database before followed with a dot
					//then the table
    
	$sql2="INSERT INTO rainforest.customer(Username,First_Name,Last_Name,Email_Address,Physical_Address,Password) VALUES('$user','$first','$last','$email','$address','$pass')";
    $result2=mysqli_query($con, $sql2);
	
        if($result2)
		{ 
		
		echo "";
		{
		
		}
			
		} 
		else 
		{  
		echo "Failure!";  
		}  
  
		} else {  
		echo "That username already exists! Please try again with another.";  
		}  
	
} 		else {  
		echo "All fields are required!";  
} 
 
  
?>  
</body>  
</html>
