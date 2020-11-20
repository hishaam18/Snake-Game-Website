<?php

//Include the PHP functions to be used on the page 
include('mycommon.php'); 

//Output header 
outputHeader("My Game Website - Login");

?>

<?php

//outputs nav bar
outputBannerNavigation("Login");

?>

<link rel="stylesheet" type="text/css" href="myloginstyle.css">


<!-- Contents of the page -->

<div class="containerlogin"> 

    <form action="/action_page.php" method="post">
        <div class="imgcontainer">
            <img src="https://cdn.pixabay.com/photo/2014/04/03/11/47/person-312160_1280.png" >
        </div>

        <h1>LOGIN</h1>

        <div class="container">
            <label for="uname"><b>Email</b></label>
            <input type="text" placeholder="Enter Email" name="uname" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="psw" required>

            <button class="buttonlogin">Login</button>
            <button class="buttoncancel">cancel</button>
        </div>
    </form>
</div>    


<?php
//Output the footer
outputFooter();
