
<html>


 <head>
 <title>Pogomuviz++</title>
     <link rel="stylesheet" type="text/css" href="apn.css">
     
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
$db="Pogomuviz";

mysql_connect($host,$user,$pass); 

mysql_select_db($db);

$user=$_SESSION['login_user'];
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	$sql = "select * from produse where gen='" . $action . "' ORDER BY pret DESC" ;
$results = mysql_query($sql);
}
else
{
	$sql = "SELECT * FROM produse where pret BETWEEN 33 AND 50 ORDER BY pret DESC ";   

$results = mysql_query($sql);
}
$counter=0;
while ($row = @ mysql_fetch_array($results))
{

echo 


"<div id= 'item'>" .


"<p><img src=".$row["image"]." height=\"145\" width=\"130\" ></p>".
"<p>$".'<b>'.$row["pret"].'</b>'."</p>".
 "<p><a href=\"desk.php?id=".$row['id']."\">".$row['titlu']."</a></p>". 
"<p><a href=\"sendorder.php?id=".$row['id']."&pret=".$row['pret']."&titlu=".$row['titlu']."\">Add to Cart</a></p>".  
 "</div>"; 
}


?>

</body>
</html>