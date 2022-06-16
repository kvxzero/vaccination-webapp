<?php
            include_once "./dbconnection.php";
            session_start();
            $name = $_POST['name'];
            $email = $_POST['email'];
            $password = $_POST['password'];

            $sql = "INSERT INTO user VALUES ('$name', '$email', '$password', '0')";
            $status = $con -> query($sql);
            if ($status) {
                echo '<span style="color:white; background:green; border-radius: 5px;">&nbsp&nbspAccount created successfully!&nbsp&nbsp</span>';
            }
            else {
                echo '<span style="color:white; background:red; border-radius: 5px;">&nbsp&nbspFailed to create account&nbsp&nbsp</span>';
            }

?>

