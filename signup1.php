<?php

include 'connectdb.php';


function NewUser()
{
	$fullname = $_POST['name'];
	//$userName = $_POST['user'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$contact= $_POST['contact_no'];
	$interest= $_POST['interest'];
	$query = "INSERT INTO user_details (email_id,user_name,password,phone,interest_name) VALUES ('$email','$fullname','$password','$contact','$interest')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	//echo "YOUR REGISTRATION IS COMPLETED...";
	header("Location:reg_complete.html");
    exit;
	}
}

function SignUp()
{
if(!empty($_POST['name']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM user_details WHERE user_name = '$_POST[name]' AND password = '$_POST[password]'") or die(mysql_error());

	if(!$row = mysql_fetch_array($query) or die(mysql_error()))
	{
		newuser();
	}
	else
	{
		echo "SORRY...YOU ARE ALREADY REGISTERED USER...";
	}
}
}
if(isset($_POST['submit']))
{
	SignUp();
}
?>


 

