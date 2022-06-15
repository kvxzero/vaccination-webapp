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
        <h1>Add Vaccination Centers</h1>
        <form action="savecenter.php" method="POST">
            Name: <br><br><input class = "form-control" type="text" name="name" required><br><br>
            Location: <br><br><input class = "form-control" type="text" name="location" required><br><br>
            <input class="btn btn-primary" type="submit" value="Add Center">
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

