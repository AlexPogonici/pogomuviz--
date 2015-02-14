
<html>
 <head>
 <title>Pogomuviz++ Shopping Cart</title>
     <link rel="stylesheet" type="text/css" href="desk.css">
     <link rel="stylesheet" type="text/css" href="bootstrap.css">
     <script src="jquery-1.11.1.js"></script>

<script type="text/javascript">
	$(document).ready(function(){
$(".qty").on( 'keyup change', function () {
 var rowElement = $(this).parents("tr"); 
 var id = rowElement.attr('id');
 var qty = $("input[name=qty-"+id+"]").val();
 var price = $("#price-"+id).html();
 var result = qty * price;
    $("#subtotal-"+id).html(result);
    var ftotal = 0;
   $(".subtotal").each(function() {
  ftotal = ftotal + parseInt($(this).html());
    });
   $("#nettotal").html(ftotal);
  });
  });

</script>

</head>
 <body>

<a href="index.php"><img src="pogomuviz++.jpg" width="150px" height="auto"> </a>
<!--asc
1.gasesti eventul pt schimbare val in dropdown numeric ala
2.pui in functia de event asta  header('location:update.php?aici dai parametri cantitate si val pret')
3.in update.pho faci calculele dupa ce iei cu get si salvezi in db /cam asta e logica,i see
4.header("cart.php")
-->

<?php
session_start();
if(isset($_SESSION['login_user']))
{
  echo " <div id=\"login\"> Sunteti logat, " . $_SESSION['login_user'] . "<a href=\"logout.php\"><br>Logout</a>"."</div>";  
   
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

}
?> 
<br>
<hr>

<br>
<center>

<br><br>
<h1>Shopping Cart</h1><br>
<form id="shopping-cart" action="cart.php" method="post">
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
        
		<tbody></tbody><br><br>

	</table>
<br>
	</center>
	<ul id="shopping-cart-actions">
		<li>
			<a href="produse.php" class="btn">Continue Shopping</a>
		</li>
		<li>
			<a href="checkout.php" class="btn">Go To Checkout</a>
		</li>
	</ul>
</form>


</body>
</html>