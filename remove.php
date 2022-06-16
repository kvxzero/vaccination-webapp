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
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <hr>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div style="margin: auto; height: 500px; width: 500px; margin-top:50px;">
        <h1>Apply for Vaccination</h1>
        <p></p>
        <form action="removeadmin.php" method="POST">
            Name: <br><br><input class = "form-control" type="text" name="name" required><br><br>
            <input class = "form-control btn-primary" type="submit" value="Remove Centers">
            <br><br>
            <?php
                if (isset($_SESSION['cstatus'])) {
                    echo $_SESSION['cstatus'];
                    unset($_SESSION['cstatus']);
                }
            ?>
        </form>
        <br><a href = "admindashboard.php">Admin Dashboard</a><br><br>
        </div>
    </body>
</html>

