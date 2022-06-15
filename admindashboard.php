<?php
    session_start();
?>
<style>
    .midtext {
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
            Welcome to Presidio Vaccinations (Admin)
        </h1>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <hr>
    </head>
    <body style="color: blue">
        <div style="margin: auto; height: 500px; width: 500px; margin-top:50px;">
        <a class="midtext" href = "vaccinate.php">Add Vaccination Centers</a><br><br>
        <a class="midtext" href = "admindosage.php">Dosage Details</a><br><br>
        <a class="btn btn-danger" href = "index.php">Logout</a><br><br>
        </div>
    </body>
</html>
