<?php
    include_once './dbconnection.php';
    session_start();
    $sql = "SELECT * FROM dosagetable";
    $result = $con->query($sql);
    $_SESSION['vstatus'] = "<strong>Center Name - Date</strong><br>";
    if ($result->num_rows>0) {
        while($cols = $result->fetch_assoc()){
            $_SESSION['vstatus'] .= "".$cols['Center']." - ".$cols['Date']."<br>";
        }
        header('location:admindosage.php');
    }
    else {
        $_SESSION['vstatus'] = "No pending dosages";
        header('location:admindosage.php');
    }
?>