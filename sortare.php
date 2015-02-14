<?php
session_start();
$host = "localhost";
$user="root";
$pass="";
$db="pogomuviz++";

$user=$_SESSION['login_user'];
if(isset($_GET['action']))
{
	$action=$_GET['action'];
}
mysql_connect($host,$user,$pass);
mysql_select_db($db);

$sql = "select gen from produse where gen='" . $action . "'";
$result = mysql_query($sql);


?>