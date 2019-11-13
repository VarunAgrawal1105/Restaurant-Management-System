<?php 
require "connection.php";
if(!isset($_SESSION['user'])){
	header("location:index.html");
	}
?>



<!DOCTYPE html>

<html lang="en">

<head>

    <meta charset="utf-8">

    <title>Feedback</title>
	<link rel="stylesheet" href="CSS/style.css">
<style>

</style>

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>
    <div style="background-image: url(); width:100%;height:600px; background-repeat: no-repeat; background-size:100% 100%;">
          <div id="nav">
               <ul>
                    <li><a href="dashbord.php">Home</a></li>
                    <li><a href="menu.php">Menus</a></li>
					<li><a href="reservation.php">Reservation</a></li>
                     
					<li><a href="booktable.php">BookTable</a></li>
					<li><a href="partyhall.php">PartyHall</a></li>
                    <li><a href="feedback.php">Feedback</a></li>
					<li><a href="contactus.php">ContactUs</a></li>
                    <li><a href="logout.php">LogOut</a></li>
                    
               </ul>
          </div>





<div class="feedback" style="height:400px;width:400px;margin-left:500px;text-align:center;border:2px solid black;">

<form action="feedbacking.php" method="post">
<h1>Give Your Feedback</h1><br><br>
<input type="text" name="name" placeholder="Name" required style="width:80%;"><br><br>

<select name="rating" required style="width:80%;">
<option>Rating</option>
<option value="1">Very Bad</option>
<option value="2">Bad</option>
<option value="3">Good</option>
<option value="4">Very Good</option>
<option value="5">Excellent</select><br><br>
<input type="text" name="title" placeholder="Title" required style="width:80%;"><br><br>

<textarea name="description" placeholder="description" style="width:80%;" >


</textarea><br><br>
<input type="submit" value="Submit Feedback">



</form>




</div>
<br><br>
<hr>
<div class="display" style="margin-left:5px;">
<?php 
$displayQuery="select * from `feedback`;";
$result=mysqli_query($connection,$displayQuery);
if($result){
	while($row=mysqli_fetch_array($result)){
		?><div class="rating" style="width:50px;text-align:center;color:white;background-color:green;"><?php echo $row['rating'];?>&nbsp;*</div>
		<h3 style="margin-left:100px;"><?php echo $row['title'];?></h3>
		<p><?php echo $row['description'];?></p>
		By &nbsp;<?php echo $row['name'];?>
		
		<?php if ($row['user_id'] == $_SESSION['user']): ?>  
                                  

                                    <a  href="deletefeedback.php?f_id=<?php echo $row['fid']; ?>" ><button class="btn btn-sm btn-danger">Delete</button></a> 

                                  <?php endif ?>
		<hr>
		
		
		<?php
		
	}
	
}
else{
	die("error");
	
}
?>

</div>
</div>
</body>
</html>