<?php
    $dbhostname = "localhost";
    $dbusername = 'root';
    $dbpassword = '';
    $dbname = 'covid-db';
    
    $con = new mysqli($dbhostname, $dbusername, $dbpassword, $dbname);
    if($con -> connect_error === true) {
        die('Connection failed'. $con->connect_error);
    }
    else {
        
    }
?>
