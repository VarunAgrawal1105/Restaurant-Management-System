<?php

    require "connection.php";

?>

<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Register</title>
	
	<style>
	*{
	margin: 0;
	padding: 0;
	}

	.container{
	

		height:500px;
		width:400px;
		border:2px solid black;
	}
	
	
	</style>

</head>

<body>
<form action="registerme.php" method="post">
  <div class="container" >
    <h1>Register</h1>
    <p>Please fill in this form to create an account.</p>
    <hr>
	
	<label for="name"><b>Name</b></label>
    <input type="text" placeholder="Enter Name" name="name" required><br>
	
	
	 <label for="address"><b>Address</b></label>
    <input type="text" placeholder="Enter Address" name="address" required><br>
	
	<label for="phone"><b>Phone</b></label>
    <input type="text" placeholder="Enter Phone" name="phone" required><br>
    
	<label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required><br>

    <label for="password"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password" required><br>
	
	 <label for="confirm_password"><b>Confirm Password</b></label>
<input type="password" name="confirm_password"  placeholder="Enter Re-Password" required>

	<p>By creating an account you agree to our <a href="#">Terms & Privacy</a>.</p>
	
	 <input type="submit" name="submit" value="Register"><br>
   <hr>

    <p>Already have an account? <a href="">Sign in</a>.</p>
   
  </div>

 
</form>
    

</body>
</html>