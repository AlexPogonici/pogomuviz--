<?php
  $host = "localhost";
$user="root";
$pass="";
$db="Pogomuviz";

mysql_connect($host,$user,$pass);
mysql_select_db($db);
  
$id =$_GET['id'];

    // sending query
    mysql_query("DELETE FROM addtocart WHERE id ='$id'")
    or die(mysql_error());      
      
      header('Location:cart.php');
    ?>