<?php

//Ouputs the header for the page and opening body tag
function outputHeader($title){
    echo '<!DOCTYPE html>';
    echo '<html>';
    echo '<head>';
    echo '<title>' . $title . '</title>';
    echo '<!-- Link to external style sheet -->';
    echo '<link rel="stylesheet" type="text/css" href="mycommonstyle.css">';
    echo '</head>';
    echo '<body>';
}

function outputBannerNavigation($pageName){

    //Output first part of navigation
    echo '<div class="navigation">';


    //Array of pages to link to
    $linkNames = array("Home", "Game", "Registration", "Login");
    $linkAddresses = array("myindex.php", "mygame.php", "myregistration.php", "mylogin.php");

    //Output navigation
    for($x = 0; $x < count($linkNames); $x++){
        echo '<a ';
        if($linkNames[$x] == $pageName){
            echo 'class="selected" ';
        }
        echo 'href="' . $linkAddresses[$x] . '">' . $linkNames[$x] . '</a>';
    }
    echo '</div>';

}

//Function that outputs the footer
function outputFooter(){

    echo'
    <div class="footer">

          <a1 href="http://www.google.com">Tutorial</a1> 
          <a2 href="http://www.google.com">Reviews</a2>  

          <p1> Moosafur Mohammud Hishaam</p1> <br>
          <p2> M00680031 </p2> 

        </div>';

    echo '</body>';
    echo '</html>';
}

?>