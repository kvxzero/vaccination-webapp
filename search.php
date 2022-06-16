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
        <script>
            function getData(){
                var name = document.getElementById('name').value;
                var http=new XMLHttpRequest();
                http.open('POST','searchuser.php',true);
                http.setRequestHeader('Content-Type','application/x-www-form-urlencoded');
                http.send('name='+name);
                http.onreadystatechange = function(){
                    if(http.readyState === 4 && http.status === 200){
                        document.getElementById('status').innerHTML = http.responseText;
                    }
                };
            }
        </script>
        <link rel="stylesheet" href="styles.css">
    </head>
    <body>
        <div style="margin: auto; height: 500px; width: 500px; margin-top:50px;">
        <h1>Search for vaccination centers</h1>
        <p></p>
        <form action="searchuser.php" method="POST">
            Name: <br><br><input class = "form-control" type="text" name="name" onkeyup="getData()"><br><br>
            <br><br>
            <?php
                if (isset($_SESSION['cstatus'])) {
                    echo $_SESSION['cstatus'];
                    unset($_SESSION['cstatus']);
                }
            ?>
        </form>
        <div id="status">
            
        </div>
        <br><a href = "userdashboard.php">User Dashboard</a><br><br>
        </div>
    </body>
</html>

