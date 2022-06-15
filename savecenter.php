<?php
            include_once "./dbconnection.php";
            session_start();
            $name = $_POST['name'];
            $location = $_POST['location'];

            $sql = "INSERT INTO vaccinationcenters VALUES ('$name', '$location')";
            $status = $con -> query($sql);
            if ($status) {
                $_SESSION['cstatus'] = "Center added succesfully";
                header('location:vaccinate.php');
            }
            else {
                $_SESSION['cstatus'] = $con->error;
                header('location:vaccinate.php');
            }

?>

