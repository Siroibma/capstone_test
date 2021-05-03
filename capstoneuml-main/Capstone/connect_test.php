<?php
    $dbhost = 'weblab.cs.uml.edu';
    $dbuser = 'alora1';
    $dbpass = 'Haehoo3i';
    $conn = mysql_connect($dbhost, $dbuser, $dbpass);


    if(! $conn ) {
        die('Could not connect: ' . mysql_error());
     }
     
    //echo 'Connected successfully';
    
    mysql_select_db( 'alora1' );


         

?>