



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




<fieldset id = \"fieldset-payment\">
 <center>
<b><p>Your order has been successfully sent.</p></b>
 </center>
</fieldset>

<center>
<img src="orderpic.jpg" width="450px" height="auto"> </a>
</center>

<?php
   $from = "pogonicialexandru@yahoo.com";
   $headers = "From:" . $from;
    mail ("pogonicialexandru@yahoo.com" ,"headline" , "text", $headers);
?>


</body>
</html>