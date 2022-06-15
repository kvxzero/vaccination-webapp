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
        <h1 style="color:blue; text-align:center; margin-top: 50px; margin-bottom: 50px">
            Presidio Vaccinations
        </h1>
        <hr>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    </head>
    <body style="color: blue">
        <div style="margin: auto; height: 500px; width: 500px; margin-top:50px;">
            <h1>View Dosage Details</h1>
            <p></p>
        <form action="postview.php" method="POST">
            <input class = "form-control" style="background-color: blue; color: white;" class="btn btn-primary" type="submit" value="View Details">
            <br><br>
            <?php
                if (isset($_SESSION['vstatus'])) {
                    echo $_SESSION['vstatus'];
                    unset($_SESSION['vstatus']);
                }
            ?>
        </form>
        <br><a href = "admindashboard.php">Admin Dashboard</a><br><br>
        </div>
    </body>
</html>