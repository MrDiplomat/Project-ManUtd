<?php
session_start(); 
require('connect.php');

if(isset($_POST['user_name']) and isset($_POST['user_password'])){
	$user_name=$_POST['user_name'];
	$user_password=$_POST['user_password'];
	$null=0;

	$query="SELECT*FROM user WHERE user_name='$user_name' and user_password='$user_password'";
	
	$result=mysqli_query($connection,$query) or die(mysqli_error($connection));
	$count=mysqli_num_rows($result);
	
	if($user_name=="admin"&&$user_password=="admin")
	{
		header("Location: adminpage/index.php");
	}
	
	if ($count == 1){
	$_SESSION['user_name'] = $user_name;
	}else{

	$fmsg = "Invalid Login Credentials.";
	}
	}
if (isset($_SESSION['user_name'])){
	$user_name = $_SESSION['user_name'];
	echo " ".$user_name."";
	/*header("Location: index.php");*/
 
	}
else{echo"Noob!!!!";
	}
	

?>