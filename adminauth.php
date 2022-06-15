<?php
    include_once './dbconnection.php';
        
    $name = $_POST['username'];
    $password = $_POST['password'];
    
    $sql1 = "select Password from user where admin = '1' and name = '$name'";
    $records = $con -> query($sql1);
    
    if($records -> num_rows>0) {
        $dbpwd = $records->fetch_assoc();
        if($dbpwd['Password'] === $password){
            echo 1;
        }
        else {
            echo 0;
        }
    }
    else {
        echo 0;
    }
?> 
