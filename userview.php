<?php
    session_start();
?>
<style>
    #midtext {
        font-size: 24px;
    }
    a:hover {
        color: red;
    }
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <h1 style="color:white; text-align:center; margin-top: 50px; margin-bottom: 50px">
            Presidio Vaccinations
        </h1>
        <hr style="color: white;">
        <link rel="stylesheet" href="styles.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body>
        <div style="margin: auto; height: 500px; width: 500px; margin-top:50px;">
            <h1 style="color:white;">View Vaccinations Details</h1>
            <p></p>
        <form action="userviewacc.php" method="POST">
            <input class="btn btn-primary" style="background-color: blue; color: white;" type="submit" value="View All Centers">
            <br><br>
            <?php
                if (isset($_SESSION['vstatus'])) {
                    echo $_SESSION['vstatus'];
                    unset($_SESSION['vstatus']);
                }
            ?>
        </form>
        <br><a href = "userdashboard.php">User Dashboard</a><br><br>
        </div>
    </body>
</html>