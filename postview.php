<?php
    include_once './dbconnection.php';
    session_start();
    $sql1 = "SELECT Date FROM dosagetable";
    $sql2 = "SELECT Center FROM dosagetable";
    $result1 = $con->query($sql1);
    $result2 = $con->query($sql2);
    if ($result1->num_rows>0) {
        $row1 = $result1->fetch_assoc();
        $row2 = $result2->fetch_assoc();
        $_SESSION['vstatus'] = "<strong>".$row2['Center']." - ".$row1['Date']."</strong>";
        header('location:admindosage.php');
    }
    else {
        header('location:admindosage.php');
    }
?>