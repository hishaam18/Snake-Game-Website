<?php
//Include the PHP functions to be used on the page 
include('mycommon.php'); 

//Output header and navigation 
outputHeader("My Game Website - Registration");
?>

<?php

outputBannerNavigation("Registration");

?>

<link rel="stylesheet" type="text/css" href="myregistrationstyle.css">

<!-- Contents of the page -->

<form action="action_page.php">

    <div class="imgcontainer">
        <img src="https://cdn.pixabay.com/photo/2014/04/03/11/47/person-312160_1280.png" >
    </div>

    <div class="container">
        <h1>Register</h1>
        <p>Please fill in this form to create an account.</p>
        <hr>

        <label for="email"><b>Email</b></label>
        <input type="text" placeholder="Enter Email" name="email" required> <br>

        <label for="psw"><b>Password</b></label>
        <input type="password" placeholder="Enter Password" name="psw" required> <br>

        <label for="psw-repeat"><b>Repeat Password</b></label>
        <input type="repeatpassword" placeholder="Repeat Password" name="psw-repeat" required> <br>
        <hr>

        <button type="submit" class="registerbtn">Register</button>
    </div>

    <div class="containersignin">
        <p>Already have an account? <a href="mylogin.php">Sign in</a>.</p>
    </div>

</form> 


<?php
//Output the footer
outputFooter();
