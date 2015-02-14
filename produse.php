


<html>


 <head>
 <title>Pogomuviz++</title>
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






<div id="item_list">
<ul>
  <li><a href="produse.php?action=Drama"> Drama </a> </li>
 <li><a href="produse.php?action=Arthouse"> Arthouse</a> </li>
 <li><a href="produse.php?action=SF"> SF</a> </li>
 <li><a href="produse.php?action=Thriller"> Thriller</a> </li>
 <li><a href="produse.php?action=Comedy"> Comedy</a> </li>
 <li><a href="produse.php?action=Action"> Action</a> </li> 
 <li><a href="produse.php?action=Documentary"> Doc</a> </li>
 <li><a href="produse.php?action=Horror"> Horror</a> </li>
 <li><a href="produse.php?action=Western"> Western</a> </li>
 <li><a href="produse.php?action=Romance"> Romance</a> </li>
 <li><a href="produse.php?action=Adventure"> Adventure</a> </li>
 </ul>

</div>



<hr>

<center>
<div id="pricebtn" >
<ul>
 <h6>Price Filter</h6>
<li><a href="produse.php?sort=1?">1-14</a></li>
<li><a href="produse.php?sort=2?">15-30</a></li>
<li><a href="produse.php?sort=3?">31-50</a></li>
</ul>
</div>





</center>

<br>

<?php 
$host = "localhost";
$user="root";
$pass="";
$db="Pogomuviz";

mysql_connect($host,$user,$pass); 

mysql_select_db($db);

$user=$_SESSION['login_user'];
 if(isset($_GET['sort']))
 {
  $sort = $_GET['sort'];   

  if($sort==1)
  {
    	$sql= "select * from produse where pret BETWEEN 1 AND 14 ORDER BY pret ASC"; 
  }else  if($sort==2)
  {
    	$sql= "select * from produse where pret between 15 AND 30 ORDER BY pret ASC"; 
    	
  }else   if($sort==3)
  {
    	$sql= "select * from produse where pret between 31 AND 50 ORDER BY pret ASC";
  }       
    $results = mysql_query($sql);
}
else{
if(isset($_GET['action']))
{
	$action=$_GET['action'];
	$sql = "select * from produse where gen='" . $action . "' ORDER BY pret DESC" ;
$results = mysql_query($sql);
}
else
{
	$sql = "SELECT * FROM produse ORDER BY pret DESC";
$results = mysql_query($sql);
}
}
while ($row = @ mysql_fetch_array($results))
{

echo 


"<div id= 'item'>" .


"<p><img src=".$row["image"]." height=\"125\" width=\"110\" ></p>".
"<p>$".'<b>'.$row["pret"].'</b>'."</p>".
 "<p><a href=\"desk.php?id=".$row['id']."\" style=\"font-size:11\">".$row['titlu']. "</a></p>".  
"<p><a href=\"cart.php?id=".$row['id']."&pret=".$row['pret']."&titlu=".$row['titlu']."\">Add to Cart</a></p>". 

 "</div>"; 
}

?>


</body> 
</html>