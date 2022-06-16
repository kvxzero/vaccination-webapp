<?php
            include_once "./dbconnection.php";
            session_start();
            $name = $_POST['name'];
            $date = $_POST['date'];
            
            $sqlcheck = "SELECT * from dosagetable where Date = '$date'";
            $result = $con->query($sqlcheck);
            if ($result->num_rows>=10) {
                $_SESSION['cstatus'] = "Only 10 members are allowed per day, Select another date.";
            }
            else {
                $sql = "INSERT INTO dosagetable VALUES ('$name', '$date')";
                $status = $con -> query($sql);
                if ($status) {
                    $_SESSION['cstatus'] = "Applied succesfully";
                    header('location:apply.php');
                }
                else {
                    $_SESSION['cstatus'] = $con->error;
                    header('location:apply.php');
                }
            }
?>

