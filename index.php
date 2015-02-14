

<?php

$host = "localhost";
$user="root";
$pass="";
$db="pogomuviz";

mysql_connect($host,$user,$pass);
mysql_select_db($db);

if(isset($_POST['username'])){
  $username = $_POST['username'];
  $password = $_POST['password'];
$sql = "select * from users where username='".$username."'AND password = '".$password."' LIMIT 1";
$result = mysql_query($sql);

if (mysql_num_rows($result)==1) {
    
     
      

    session_start();

    $_SESSION['login_user']= $username;  // Initializing Session with value of PHP Variable
   

  } else{

  
   exit();

}

}

?>

<html>
<head>
 <title>Pogomuviz++</title>
 <link rel="stylesheet" type="text/css" href="index.css">
<link rel="stylesheet" type="text/css" href="bootstrap.css">
  <link rel="stylesheet" type="text/css" href="http://themes.googleusercontent.com/static/fonts/roboto/v11/2UX7WLTfW3W8TclTUvlFyQ.woff">
</head>

    <body>


     
<?php
if(isset($_SESSION['login_user']))
{
  echo " <div id=\"login\"> Sunteti logat, " . $_SESSION['login_user'] . "<a href=\"logout.php\"><br>Logout</a>"."</div>";  
   
}
else
{
    echo" <div id=\"login\">

         <form method=\"post\" action=\"index.php\">
         Username: <input type=\"text\" name=\"username\" /> <br /><br />
         Password: <input type=\"password\" name=\"password\" /> <br /><br />
         <input type=\"submit\" name=\"submit\" value=\"Log In\">
         <p><a href=\"sign-in.php\">SignIn</a></p>
         
         

   
     </div>";
   }
    ?>
     

     <br><br><br><br>
<div id="logo">
        <img src="pogomuviz++.jpg" width="430px" height="auto">
     </div>


     <div id="menu">

     <span></span>

     <ul>

      <li class="current"> <a href="index2.php"> Home </a> </li>
      <li> <a href="produse.php"> Products </a> </li>
      <li> <a href="cart.php"> Shopping Cart </a> </li>
      <li> <a href="contact.php"> Contact </a> </li>

     </div>
     <!--
     <div id="form">
<br><br>

 <form action = "results.php" method="get">

  <input type="text" name="value" placeholder="Search Anything" style="height:30px; width:240px;" >
   <input type="submit" name="search" value="Pogo It" style="height:30px" >

   </form>

</div>
-->
    </body>

    </html>