<?php
            include_once "./dbconnection.php";
            session_start();
            $name = $_POST['name'];
            
            $sqlcheck = "SELECT * from vaccinationcenters where Name = '$name'";
            $result = $con->query($sqlcheck);
            if ($result->num_rows>0) {
                $sql = "DELETE from vaccinationcenters where Name = '$name'";
                $status = $con -> query($sql);
                if ($status) {
                    $_SESSION['cstatus'] = "Removed succesfully";
                    header('location:remove.php');
                }
                else {
                    $_SESSION['cstatus'] = $con->error;
                    header('location:remove.php');
                }
            }
            else {
                $_SESSION['cstatus'] = "Vaccination Center does not exist.";
            }
?>

