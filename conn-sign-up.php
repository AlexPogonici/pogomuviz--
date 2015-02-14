<?php

$host = 'localhost';
$user='root';
$pass="";
$db='pogomuviz';




mysql_connect($host,$user,$pass)  or die("Failed to connect to MySQL: " . mysql_error());
mysql_select_db($db) or die("Failed to connect to MySQL: " . mysql_error());


function NewUser()
{
	$fullname = $_POST['name'];
	$userName = $_POST['username'];
	$email = $_POST['email'];
	$password =  $_POST['password'];
	$query = "INSERT INTO users (fullname,userName,email,password) VALUES ('$fullname','$userName','$email','$password')";
	$data = mysql_query ($query)or die(mysql_error());
	if($data)
	{
	echo "YOUR REGISTRATION IS COMPLETED...";
	}
}

function SignUp()
{
if(!empty($_POST['username']))   //checking the 'user' name which is from Sign-Up.html, is it empty or have some text
{
	$query = mysql_query("SELECT * FROM users WHERE username = '$_POST[username]' AND password = '$_POST[password]'") or die(mysql_error());

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


