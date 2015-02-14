<html> 
 <head>
  <title>Pogomuviz++ Send Order</title>
 <link rel="stylesheet" type="text/css" href="checkout.css">
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
  <center><h2>Send Order</h2></center>
   
<br><br>
<hr>


<?php
$name = $_POST['name'];
$email = $_POST['email'];
$city = $_POST['city'];
$address = $_POST['address'];
$zip = $_POST['zip'];
$country = $_POST['country'];
$ship = $_POST['ship'];
$pay = $_POST['pay'];


echo" <div id=\"hm\">";

 echo '<span style=\"font-size:17; font-weight:bold;\"> Name: </span>'; echo $name;
  echo'<br>';
  echo '<span style=\"font-size:17; font-weight:bold;\"> Email: </span>'; echo $email;
  echo'<br>';
   echo '<span style=\"font-size:17; font-weight:bold;\"> City: </span>'; echo $city;
  echo'<br>';
  echo '<span style=\"font-size:17; font-weight:bold;\"> Address: </span>'; echo $address;
  echo'<br>';
   echo '<span style=\"font-size:17; font-weight:bold;\"> Zip: </span>'; echo $zip;
  echo'<br>';

 echo '<span style=\"font-size:17; font-weight:bold;\"> Country: </span>'; echo $country;
  echo'<br>';

    echo '<span style=\"font-size:17; font-weight:bold;\"> Shipping: </span>'; echo $ship;
    echo '<br>';
    echo '<span style=\"font-size:17; font-weight:bold;\"> Payment: </span>'; echo $pay;
    echo '<br>';

     
echo "</div>";

?>

<?php

$host = 'localhost';
$user='root';
$pass="";
$db='pogomuviz';

mysql_connect($host,$user,$pass); 

mysql_select_db($db);
if ($_SERVER['REQUEST_METHOD'] === 'GET') 
{
	if(isset($_GET['id']))
	{
	$titlu=$_GET['titlu'];
	$pret=$_GET['pret'];  
     $SQL = "INSERT INTO addtocart (titlu, cantitate, operatii,pret) VALUES ('$titlu','','Delete','$pret')";
     $results = mysql_query($SQL);
  }
} 

?> 


<br>
<center>


<form id="shopping-cart" action="sendorder.php" method="post">
	<table border="1" class="shopping-cart" style="width:60%">
		<thead>
			<tr>
				<th scope="col">Info Product</th> 
				<th scope="col">Quantity</th>
				<th scope="col">Operations</th>
				<th scope="col">Total price</th>
			</tr>
		</thead>

<?php  

  $SQL = "select * from addtocart";
     $results = mysql_query($SQL);
     $total=0;
    
while ($row = @ mysql_fetch_array($results))
{

		$titlu=$row['titlu'];
			$pret=$row['pret'];
			$total+=$pret;
		  echo "<tr>";
		     echo '<td>' .'<center>'.$row[ 'titlu'].'</center>'.'</td>'; 
		   echo '<td>' .'<input type="text" id="num" value="1" onchange="change(this,'.$titlu.','.$pret.')">'. '</td>'; 
		   echo '<td>' .'<a href="delete.php?id='.$row['id'].'">Delete</a>'. '</td>'; 
		   echo '<td>' .$row['pret']. '</td>';

		  
		    echo "</tr>";  


		}  
		echo "<table border=\"1\" class=\"shopping-cart\" style=\"width:60%\">";
		 echo " <th width=\"95\" scope=\"col\">Total</th>";
           echo '<td >' .$total. '</td>';
           echo "</table>"; 
		  
     
		 ?>
        
		<tbody></tbody>
	</table>

	</center>
	
</form>


<center>



<form action='received.php' method="post">
 <input type="submit" value="Send Order" class="btn">
 </form> 

</center>

</body>
</html>