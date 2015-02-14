<html> 
 <head>
  <title>Pogomuviz++ Checkout</title>
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
<br><br>
<hr>
<center>


<form action="sendorder.php" method="post" id="checkout-order-form">
	<h2>Your Details</h2>
		<fieldset id="fieldset-billing">
			<legend>Billing</legend>
				<!-- Name, Email, City, Address, ZIP Code, Country (select box) -->

<div>
	<label for="name">Name</label>
	<input type="text" name="name" id="name" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>  
	<label for="email">Email</label>
	<input type="text" name="email" id="email" data-type="expression" data-message="Not a valid email address" />
</div>
<br>
<div>
	<label for="city">City</label>
	<input type="text" name="city" id="city" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>
	<label for="address">Address</label>
		<input type="text" name="address" id="address" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>
	<label for="zip">ZIP Code</label>
	<input type="text" name="zip" id="zip" data-type="string" data-message="This field may not be empty" />
</div>
<br>
<div>
	<label for="country">Country</label>
		
		<select name="country" id="country" data-type="string" data-message="This field may not be empty">
			
			<option value="">Select</option>
			<option value="USA">USA</option>
			<option value="Romania">Romania</option>
			<option value="Norway">Norway</option>
			<option value="Denwark">Denmark</option>
			<option value="Italy">Italy</option>
			<option value="France">France</option>
			<option value="Serbia">Serbia</option>
			<option value="Japan">Japan</option>
			<option value="England">England</option>
			<option value="China">China</option>

		</select>
</div>
</fieldset>

<br>



<fieldset id="fieldset-shipping">
<legend>Shipping</legend>
	

<label><input type="radio" name="ship" value="Romanian Postoffice">Romanian Postoffice<br></label>
<label><input type="radio" name="ship" value="Cargus">Cargus </label>


</fieldset>

<fieldset id = "fieldset-payment">
<legend>Payment</legend>

<label><input type="radio" name="pay" value="Ramburs">Ramburs<br></label>
<label><input type="radio" name="pay" value="Card">Card<br></label>
<label><input type="radio" name="pay" value="Paypal">Paypal<br></label>


 </fieldset>


    <input type="submit" value="Submit" class="btn">



</form>
</center>
</body>
</html>