<html>
<head>
<title>Update</title>


<script>


</script>

</head>

<body>

<?php




  $host = "localhost";
$user="root";
$pass="";
$db="Pogomuviz";

mysql_connect($host,$user,$pass);
mysql_select_db($db);
  
header('Location:produse.php');

$cantitate = $_GET['cantitate'];
$pret = $_GET['pret'];
$titlu=$_GET['titlu']
$val=$_GET['cantitate'] * $_GET['pret'];
$sql="update addtocart cantitate=$cantitate , pret=$val where titlu=$titlu";;
mysql_query($sql);

header('Location:cart.php'); 

?>

</body>
</html>