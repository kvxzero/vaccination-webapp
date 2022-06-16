<?php
            include_once "./dbconnection.php";
            session_start();
            $name = $_POST['name'];
            
            $sqlcheck = "SELECT Name from vaccinationcenters where Name = '$name'";
            $result = $con->query($sqlcheck);
            if ($result->num_rows>0) {
                $output = "<ol>";
                foreach ($result as $item) {
                    if (stripos($item, $name) === 0) {
                        $output .= "<li>".$item."</li>";
                    }
                }
                $output .= "</ol>";
                echo $output;
                header('location:search.php');
            }
            else {
                $_SESSION['cstatus'] = "No results found";
                header('location:search.php');
            }
?>

