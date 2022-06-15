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
            Welcome to Presidio Vaccinations
        </h1>
        <hr>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script>
            function check() {
                var username = document.getElementById('username').value;
                var password = document.getElementById('password').value;
                
                //Ajax Call
                var http = new XMLHttpRequest();
                http.open('POST', 'auth.php', true);
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                http.send("username="+username+"&password="+password);
                
                //receive response
                http.onreadystatechange = function() {
                  if (http.readyState === 4 && http.status === 200) {
                      var x = http.responseText;
                      x = x-1;
                      if (x === 0) {
                          window.location.href = 'userdashboard.php';
                      }
                      else {
                          document.getElementById("error").innerHTML = "Invalid username or password";
                      }
                  }
                };
            }
        </script>
    </head>
        <div style="color:blue; margin: auto; height: 500px; width: 500px; margin-top:50px;">
        <h1 style="font-size: 36px; color:black; text-align:center; margin: 0 auto;">User Login</h1>
        <p></p>
        <h2 style="font-size: 24px"> Username: </h2>
        <input class = "form-control" type="text" id="username"><br>
        <h2 style="font-size: 24px"> Password: </h2>
        <input class = "form-control" type="password" id="password"><br><br>
        <div id="error" style=";color: red;"></div><br>
        <div style="text-align:center; margin: 0 auto;">
        <button onclick="check()" class="btn btn-primary" style="background-color: blue; color: white;">Sign in</button><br><br>
        Click here for <a href = "adminlog.php"><strong>Admin Login</strong></a><br>
        New user? <a href = "usersignup.php"><strong>Sign Up</strong></a><br>
        <div>
        </div>
</html>
