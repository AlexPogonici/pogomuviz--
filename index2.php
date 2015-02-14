<html>
<head>

 <title>Index2</title>
 <link rel="stylesheet" type="text/css" href="index2.css">
 <link rel="stylesheet" type="text/css" href="bootstrap.css">
 
<!--Make sure page contains valid doctype at the very top!-->

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

<script type="text/javascript" src="stepcarousel.js">

/***********************************************
* Step Carousel Viewer script- (c) Dynamic Drive DHTML code library (www.dynamicdrive.com)
* Visit http://www.dynamicDrive.com for hundreds of DHTML scripts
* This notice must stay intact for legal use
***********************************************/

</script>

<style type="text/css">

.stepcarousel{
position: relative; /*leave this value alone*/
border: 9px solid white;
overflow: scroll; /*leave this value alone*/
width: 690px; /*Width of Carousel Viewer itself*/
height: 301px; /*Height should enough to fit largest content's height*/
-webkit-box-sizing: border-box; /* set box model so container width and height value includes any padding/border defined */
-moz-box-sizing: border-box;
box-sizing: border-box;
}

.stepcarousel .belt{
position: absolute; /*leave this value alone*/
left: 0;
top: 0;
}

.stepcarousel .panel{
float: left; /*leave this value alone*/
overflow: hidden; /*clip content that go outside dimensions of holding panel DIV*/
margin: 8px; /*margin around each panel*/
width: 900px; /*Width of each panel holding each content. If removed, widths should be individually defined on each content DIV then. */
}

span.paginatecircle{ /* CSS for paginate circle spans. Required */
background: white;
border: 2px solid black;
border-radius: 10px;
width: 6px;
height: 6px;
cursor: pointer;
display: inline-block;
margin-right: 4px;
position: relative;
    left: 590px;
}

span.paginatecircle:hover{
background: gray;
}

span.paginatecircle.selected{
background: black;
}

</style>



<script type="text/javascript">

stepcarousel.setup({
	galleryid: 'mygallery', //id of carousel DIV
	beltclass: 'belt', //class of inner "belt" DIV containing all the panel DIVs
	panelclass: 'panel', //class of panel DIVs each holding content
	autostep: {enable:true, moveby:1, pause:3000},
	panelbehavior: {speed:500, wraparound:true, wrapbehavior:'slide', persist:true},
	defaultbuttons: {enable: true, moveby: 1, leftnav: ['arrowl.gif', -5, 80], rightnav: ['arrowr.gif', -20, 80]},
	statusvars: ['statusA', 'statusB', 'statusC'], //register 3 variables that contain current panel (start), current panel (last), and total panels
	contenttype: ['inline'] //content setting ['inline'] or ['ajax', 'path_to_external_file']
})

</script>


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

<div id="menu2">

     <span></span>

     <ul>

      <li class="current"> <a href="index2.php"> Home </a> </li>
      <li> <a href="produse.php"> Products </a> </li>
      <li> <a href="cart.php"> Shopping Cart </a> </li>
      <li> <a href="contact.php"> Contact </a> </li>

     </div>

     <hr>

<h1>New Releases</h1>

<div id="imageslider">
 
  
   
 <div id="mygallery" class="stepcarousel">
 <div class="belt">

 <div class="panel">
 <img src="imgslider/birdman.jpg" width="678px" height="281px" left="10px"/>
 </div>

 <div class="panel">
 <img src="imgslider/boyhood.jpg" width="668px" height="271px"/>
 </div>

 <div class="panel">
 <img src="imgslider/wintersleep.jpg" width="668px" height="281px"/>
 </div>

 <div class="panel">
 <img src="imgslider/whiplash.jpg" width="658px" height="271px"/>
 </div>

 <div class="panel">
 <img src="imgslider/nightcrawler.jpg" width="658px" height="271px"/>
 </div>

</div>
</div>



<p id="mygallery-paginate">
<span class="paginatecircle" data-moveby="1"></span>
</p>

</div>

<br><br>
 <div id="criterion">
<center>
<p> <u>You can also buy your favorite films from Criterion !</u> </p>

<a href="http://www.criterion.com/"><img src="criterion.png"  target="_blank" width="300px" height="auto"> </a>
</center>

<center>
 <hr>
<p><u>Pogomuviz++ Favorite Films<u></p>

<a href="https://mubi.com/lists/pogomuviz-favfilms" target="_blank"><img src="mubi.jpg" width="300px" height="auto"> </a>

</center>

</div>

 </body>


</html>