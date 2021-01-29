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

</body>


</style>
</head>


</style>  
</head>  
<body>  

  <center><h1>Login</h1></center>
   <center> <p>Please fill in this form to enter your account.</p></center>
 <form action="" method="POST">  
    <legend>  
    <fieldset> 
          
<center>Username: <input type="text" name="user"><br /> </center> 
<h1>     </h1>
<center>Password: <input type="password" name="pass"><br />  </center> 
<h1>     </h1>
<center><input type="submit" value="Submit" name="submit" />  </center>
             
        </fieldset>  
        </legend>  
</form>  
<?php  

if(isset($_POST["submit"])){  
  
if(!empty($_POST['user']) && !empty($_POST['pass'])) {  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  

$connect = mysqli_connect("localhost", "root", "", "rainforest");
$query = "SELECT * FROM registration WHERE Username='".$user."' AND Password='".$pass."'";
$result = mysqli_query($connect, $query);}

?>
<html>  
 <head>  
	
          <title>Live Table Data Edit Delete using Tabledit Plugin in PHP</title>  
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>            	
	<script src="jquery.tabledit.min.js"></script>
    </head>  
    <body>  
  <div class="container">  
   <br />  
   <br />  
   <br />  
            <div class="table-responsive">  
    <h3 align="center">Update Your Profile</h3><br />  
    <table id="editable_table" class="table table-bordered table-striped">
     <thead>
      <tr>
       <th>Username</th>
       <th>Password</th>
       <th>First Name</th>
	   <th>Last Name</th>
	   <th>Email</th>
	   <th>Address</th>
	   <th>County</th>
	   <th>City</th>
	   <th>Zipcode</th>
	   <th>Phone</th>
       </tr>
     </thead>
     <tbody>
     <?php
     while($row = mysqli_fetch_array($result))
     {
      echo '
      <tr>
       <td>'.$row["Username"].'</td>
	   <td>'.$row["Password"].'</td>
       <td>'.$row["First_Name"].'</td>
       <td>'.$row["Last_Name"].'</td>
	   <td>'.$row["Email_Address"].'</td>
       <td>'.$row["Physical_Address"].'</td>
	   <td>'.$row["County"].'</td>
	   <td>'.$row["City"].'</td>
       <td>'.$row["Zipcode"].'</td>
	   <td>'.$row["Phone"].'</td>
	  </tr>
      ';
}}
     ?>
     </tbody>
	 
    </table>
   </div>  
  </div>  
 </body>  
</html>  
<script>  
$(document).ready(function(){  
     $('#editable_table').Tabledit({
      url:'action.php',
      columns:{
       identifier:[0, "Username"],
       editable:[[1, 'Password'], [2, 'First_Name'], [3, 'Last_Name'], [4, 'Email_Address'], [5, 'Physical_Address'], [6, 'County'],
	    [7, 'City'], [8, 'Zipcode'], [9, 'Phone']]
      },
      restoreButton:false,
      onSuccess:function(data, textStatus, jqXHR)
      {
       if(data.action == 'delete')
       {
        $('#'+data.Username).remove();
       }
      }
     });
 
});  
 </script>
