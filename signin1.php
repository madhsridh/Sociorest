<?php
include 'connectdb.php';

function SignIn()
{
session_start();
if(!empty($_POST['email']))
{
    //$fullname = $_POST['name'];
	$userName = $_POST['username'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	//$contact= $_POST['contact_no'];
	//$query = "INSERT INTO user (user_name) VALUES ('$userName')";
	//$data = mysql_query ($query)or die(mysql_error());
	//$q= mysql_query("SELECT interest_name FROM user_details WHERE user_name='$_POST[username]'") or die(mysql_error());
	//$d=mysql_query ($q) or die(mysql_error());
   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text

	$query1 = mysql_query("SELECT * FROM user_details WHERE email_id = '$_POST[email]' AND password = '$_POST[password]'") or die(mysql_error());
	//$sql=mysql_query("SELECT interest_name from user_details WHERE email_id='$_POST[email]' AND password='$_POST[password]'") or die(mysql_error());
    
	$row = mysql_fetch_array($query1) or die(mysql_error());
	if(!empty($row['email_id']) AND !empty($row['password']))
	{
		$_SESSION['email_id']=$row['password'];
		
		echo "LOGIN SUCCESSFULL!";
		header("Location:http://localhost/front/welcome.html");
		exit;

	}
	
	
	else
	{
		echo "SORRY...YOU ENTERED EITHER AN INVALID EMAIL ID OR PASSWORD! PLEASE RETRY AGAIN...";
	}
	
}
}
//}
if(isset($_POST['submit']))
{
	SignIn();
}
?>


 


