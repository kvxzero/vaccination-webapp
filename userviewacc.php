<?php
    include_once './dbconnection.php';
    session_start();
    $sql1 = "SELECT Name FROM vaccinationcenters";
    $sql2 = "SELECT Location FROM vaccinationcenters";
    $result1 = $con->query($sql1);
    $result2 = $con->query($sql2);
    if ($result1->num_rows>0) {
        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $_SESSION['vstatus'] = "<strong>".$row1['Name']." - ".$row2['Location']."</strong>";
        header('location:userview.php');
    }
    else {
        header('location:userview.php');
    }
?>