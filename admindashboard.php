<?php
    session_start();
?>
<style>
    .midtext {
        font-size: 24px;
    }
</style>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
        <h1 style="color:white; text-align:center; margin-top: 50px; margin-bottom: 50px">
            Welcome to Presidio Vaccinations (Admin)
        </h1>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <hr>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div style="margin: auto; height: 500px; width: 500px; margin-top:50px;">
        <a style = "color:white;" class="midtext" href = "vaccinate.php">Add Vaccination Centers</a><br><br>
        <a style = "color:white;" class="midtext" href = "remove.php">Remove Vaccination Centers</a><br><br>
        <a style = "color:white;" class="midtext" href = "admindosage.php">Dosage Details</a><br><br>
        <a style = "color:white;" class="btn btn-danger" href = "index.php">Logout</a><br><br>
        </div>
    </body>
</html>
