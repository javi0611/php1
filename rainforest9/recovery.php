<h1>Forgot Password?</h1>
<p> Please be aware that a space will add a character but will not effect the password recovery phrase
if there are any spaces.</p>
	<form action="" method="POST">  
    <legend>  
    <fieldset> 
          
Username: <input type="text" name="user"><br />  
Password Recovery Phrase: <input type="password" name="pass"><br />   
<input type="submit" value="Submit" name="submit" />  
<button><a href="#rainforest" onclick='window.location.href = "rainforest.php"' class="active">Home</a></button>

			  
        </fieldset>  
        </legend>  
</form>  


 
<?php 

if(isset($_POST["submit"]))
{  
  
if(!empty($_POST['user']) && !empty($_POST['pass']))
{  
    $user=$_POST['user'];  
    $pass=$_POST['pass'];  
  
    $con=mysqli_connect('localhost','root','') or die(mysql_error());  
    // mysqli_select_db('user_registration') or die("cannot select DB");  
  
    $query=mysqli_query($con,"SELECT Password FROM rainforest.registration WHERE Username='".$user."' AND Password_Recovery ='".$pass."'");  
	
	if ($row = mysqli_fetch_object($query))
	{
		echo $row -> Password;
	}
	else
	{
		echo 'Your username or password did not match please try again.';
	}
	
  
   
  
} 
else 
{  
    echo "All fields are required!";  
}  
}  
?> 

 
</body>  
</html>   



