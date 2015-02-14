

<html>
 <head>
   <title>Pogomuviz++ Contact</title>
    <link rel="stylesheet" type="text/css" href="index.css">
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



<div id="pagecontent">

<pre><h1>Pogomuviz++ Support</h1></pre>
<br>
<p>If you are experiencing a bug or any technical 
difficulties with the web site Pogomuviz++,please report the 
 problem at pogonicialexandru@pogo.com</p>

<br>

<p>For any other questions or inquiries, email pogonicialexandru@pogo.com.<p>

</div>


</body>
</html>