<?php
//Include the PHP functions to be used on the page 
include('mycommon.php'); 

//Output header and navigation 
outputHeader("My Game Website - Home");

?>

<?php

outputBannerNavigation("index");

?>

<!--contents of the page-->

<head> 
    <link rel="stylesheet" type="text/css" href="myindexstyle.css">;
</head>

<!-- Contents of the page -->
<h1>SNAKES AND LADDERS</h1>

<input type=button1 onClick="parent.location='mygame.php'" value='PLAY NOW'>

<img src="https://www.bing.com/images/blob?bcid=RP0pxb7BU5IArg" alt="cube">

<p> Welcome to the Snakes and Ladders Game <br>
    Please register before you play     <br>
    You will find instructions more instructions on the Game page 

</p>

<?php
//Outputs the footer
outputFooter();
?>