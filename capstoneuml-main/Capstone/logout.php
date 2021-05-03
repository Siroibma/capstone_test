<?php


session_start();
unset($_SESSION);
session_destroy();
session_write_close();
header('Location: http://weblab.cs.uml.edu/~alora1/capstoneuml-main/Capstone/login.php');
die;
?>