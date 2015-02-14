
<html>
 <head>
 <title>Pogomuviz++ Movie Desc.</title>
     <link rel="stylesheet" type="text/css" href="desk.css">
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


<div id="desk">

<?php

$host = "localhost";
$user="root";
$pass="";
$db="Pogomuviz";

mysql_connect($host,$user,$pass);
mysql_select_db($db);
if(isset($_GET['id'])){
$id=$_GET['id'];

	$sql = "select * from produse where id='" . $id . "'" ;
$results = mysql_query($sql);
}
while ($row = @ mysql_fetch_array($results)){

echo 


"<div id= 'desk2'>" .

"<p><img src=".$row["image"]." height=\"240\" width=\"240\" ></p>".
"<p>".'<h2>'.$row["titlu"].'</h2>'."</p>".
"<p>Year: <a href=\"an.php?An=".$row['an']."\">".$row['an']."</a></p>". 

"<p>Directed by : <a href=\"reg.php?Regizor=".$row['Regizor']."\">".$row['Regizor']."</a></p>". 
"<p>Written by : <a href=\"scenarist.php?Scenarist=".$row['scenarist']."\">".$row['scenarist']."</a></p>". 
"<p>Genre : <a href=\"genre.php?Genre=".$row['gen']."\">".$row['gen']."</a></p>". 
"<p>".$row["desk"]."</p>".
"<h2>The Cast</h2>".
"<p><a href=\"actorp1.php?actorp1=".$row['actorp1']."\">".$row['actorp1']."</a></p>".
"<p><a href=\"actorp2.php?actorp2=".$row['actorp2']."\">".$row['actorp2']."</a></p>".
"<p><a href=\"actors1.php?actors1=".$row['actors1']."\">".$row['actors1']."</a></p>".
"<p><a href=\"actors2.php?actors2=".$row['actors2']."\">".$row['actors2']."</a></p>".
"<p>Rating: <a href=\"rating.php?Rating=".$row['Rating']."\">".$row['Rating']."</a></p>". 
"<p>Length: ".$row["durata"]." min</p>".
"<p>Nota IMDB: <a href=\"imdb.php?imdb=".$row["notaimdb"]."\">".$row['notaimdb']."</a></p>".
"<p>Nota RT: <a href=\"rt.php?rt=".$row["notart"]."\">".$row['notart'].'%'."</a></p>".
"<p>Price: $".$row["pret"]."</p>".
"<p><a href=\"cart.php?id=".$row['id']."&pret=".$row['pret']."&titlu=".$row['titlu']."\">Add to Cart</a></p>". 
"</div>";
}

?>
 

</div>

</body>
</html>