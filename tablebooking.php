<?php 
require "connection.php";

if(!isset($_SESSION['user'])){ 
   header("location:index.html");
}
?>
<?php
if($_SERVER['REQUEST_METHOD']=="POST"){
	$date=$_POST['date'];
	$time=$_POST['time'];
	$tname=$_POST['tname'];
	$query="select * from `user_table` where `date`='$date' and `time`='$time' and `tname`='$tname'";
	$result=mysqli_query($connection,$query);
		if($result){
			$num=mysqli_num_rows($result);
			
		if($num==0){
			$message = "Congratulation table is Booked";
       echo "<script type='text/javascript'>alert('$message');</script>";		
		
		$user_id=$_SESSION['user'];
		 $query="SELECT * FROM `users` WHERE `uid`='$user_id'";
		 $result=mysqli_query($connection,$query);
		
			$row=mysqli_fetch_array($result);
			$uname=$row['uname'];
			$phone=$row['phone'];
			$email=$row['email'];	
			 
			 $person=$_POST['person'];
			 
			 $request=$_POST['request'];
			 
		 
		 $quertinsert="INSERT INTO `user_table`(`uid`, `tname`, `uname`, `person`, `time`, `date`,`phone`, `email`, `request`) VALUES ('$user_id','$tname','$uname','$person','$time','$date','$phone','$email','$request')";
		 $result=mysqli_query($connection, $quertinsert);

		
		header("location:booktable.php");
		}
		
		else{
			echo '<script type="text/javascript">';
     echo ' alert("Sorry table is already booked")';  //not showing an alert box.
    echo '</script>';
	
		echo "try again";
	header("location:booktable.php");	
		}
		
		}
	else{
	die("worng input 1");
}
}
else{
	die("worng input 1");
}

?>