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



<html>
 <head>
 <title>++ Tabel Cart</title>
  
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


  <!-- Alex, For selecting price from Database, Just replace the current price of items with fetched price & 
  replace ids with actual ID of row in database -->
<table>
    <thead>
        <tr>
            <th>Name</th>
            <th>Qty</th>
            <th>Price</th>
            <th>Sub Total</th>
        </tr>
    </thead>
    <tbody>
    <?php  

  $SQL = "select * from addtocart";
     $results = mysql_query($SQL);
     
    
while ($row = @ mysql_fetch_array($results))
{

          echo '<tr id=' . $row['titlu'].'>'.
            '<td>Item 1</td>
            <td><input type="number" min="0" class="qty" name="qty-1" id="qty-1" value="1" /></td>
            <td id="price-1">12</td>
            <td id="subtotal-1" class="subtotal">12</td>
        </tr>';
        echo '<tr id=' . $row['cantitate'].'>';
            
        
        echo '<tr id=' . $row['cantitate'].'>';
          
        echo '<tr id=' . $row['pret'].'>';
      
        
    echo '</tbody>';
echo '</table>';
echo '<p>Net Total: <b id=\"nettotal">243</b></p>';
}
?>
