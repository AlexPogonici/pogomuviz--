
<html>


 <head>
 <title>Pogomuviz++ Years</title>
     <link rel="stylesheet" type="text/css" href="produse.css">
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
     
</head>
 <body>

<a href="index.php"><img src="pogomuviz++.jpg" width="150px" height="auto"> </a>


<?php
session_start();
if(isset($_SESSION['login_user']))
{
  echo " <div id=\"login\"> Sunteti logat, " . $_SESSION['login_user'] . "<a href=\"logout.php\"><br>Logout</a>"."</div>";  
   
}
   
?>
<br><br>
<hr>
<?php 
$host = "localhost";
$user="root";
$pass="";
$db="pogomuviz";

mysql_connect($host,$user,$pass); 

mysql_select_db($db);

$user=$_SESSION['login_user'];
if(isset($_GET['actorp2']))
{
	$action=$_GET['actorp2'];

	$sql = "select * from produse where actorp2='" . $action . "' ORDER BY pret DESC" ;
$results = mysql_query($sql);

}


while ($row = @ mysql_fetch_array($results))
{


echo 



"<div id= 'item'>" .


"<p><img src=".$row["image"]." height=\"145\" width=\"130\" ></p>".
"<p>$".'<b>'.$row["pret"].'</b>'."</p>".
 "<p><a href=\"desk.php?id=".$row['id']."\" style=\"font-size:11\">".$row['titlu']. "</a></p>".   
"<p><a href=\"cart.php?id=".$row['id']."&pret=".$row['pret']."&titlu=".$row['titlu']."\">Add to Cart</a></p>". 

 "</div>"; 
}
 
 
?>