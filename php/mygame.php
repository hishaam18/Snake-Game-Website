<?php
//Include the PHP functions to be used on the page 
include('mycommon.php'); 

//Output header  
outputHeader("My Game Website - Game");
?>

<?php
// output  nav bar
outputBannerNavigation("Game");

?>

<!--contents of the page --> 
<link rel="stylesheet" type="text/css" href="mygamestyle.css">

<h1> This is the Gameplay Area</h1>
<img src="https://i.stack.imgur.com/Cze6Z.png" class="gameplayarea">

<h2>Tutorial</h2>
<img src="https://i.stack.imgur.com/Cze6Z.png" class="tutorial">

<h3> Scoreboard</h3>
<img src="https://c.mql5.com/3/107/help.png" class="scoreboard">


<?php
//Output the footer
outputFooter();

