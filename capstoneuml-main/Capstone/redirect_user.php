<?php


session_start();

if(!isset($_SESSION['loggedIn'])){ //if login in session is not set
    header("Location: http://weblab.cs.uml.edu/~alora1/capstoneuml-main/Capstone/login.php");
}


else if(isset($_SESSION['loggedIn'])){ //if login in session is not set
        header("Location: http://weblab.cs.uml.edu/~alora1/capstoneuml-main/Capstone/user.php");
    }

?>