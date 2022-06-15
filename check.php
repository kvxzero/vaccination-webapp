<?php
    include_once './dbconnection.php';
        
    $username = $_POST['name'];
    
    $sql1 = "select Name from user where Name = '$username'";
    $records = $con -> query($sql1);
    
    if($records -> num_rows>0) {
        $output = '<span style="color:red">'.$username.' is not available</span>';
        echo $output;
    }
    else {
        $output = '<span style="color:green">'.$username.' is available</span>';
        echo $output;
    }
?> 
