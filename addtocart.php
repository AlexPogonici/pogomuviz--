<?php
 session_start();
 $id=intval($_POST["id"]);
 $user=$_SESSION["login_user"];
  if($id>0 && $user){
  	$host = "localhost";
    $user="root";
    $pass="";
    $db="Pogomuviz";

mysql_connect($host,$user,$pass); 

mysql_select_db($db);
  }





?>