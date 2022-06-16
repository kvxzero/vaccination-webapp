<?php
    include_once './dbconnection.php';
    session_start();
    $sql = "SELECT * FROM vaccinationcenters";
    $result = $con->query($sql);
    $_SESSION['vstatus'] = "<strong>Center Name - Location</strong><br>";
    if ($result->num_rows>0) {
        while($cols = $result->fetch_assoc()){
            $_SESSION['vstatus'] .= "".$cols['Name']." - ".$cols['Location']."<br>";
        }
        header('location:userview.php');
    }
    else {
        $_SESSION['vstatus'] = "No available vaccination centres";
        header('location:userview.php');
    }
?>