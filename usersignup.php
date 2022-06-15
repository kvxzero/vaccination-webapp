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
            function checkUsername() {
                var username = document.getElementById('name').value;
                var http = new XMLHttpRequest();
                http.open('POST', "check.php", true);
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                http.send('username='+username);
                
                http.onreadystatechange = function() {
                    if(http.readyState === 4 && http.status === 200) {
                        document.getElementById('status').innerHTML = http.responseText;
                    }
                }
            }
            function comeback() {
                var name = document.getElementById('name').value;
                var email = document.getElementById('email').value;
                var password = document.getElementById('password').value;
                
                //Ajax Call
                var http = new XMLHttpRequest();
                http.open('POST', 'usersignupacc.php', true);
                http.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
                http.send("name="+name+"&email="+email+"&password="+password);
                
                //receive response
                http.onreadystatechange = function() {
                  if (http.readyState === 4 && http.status === 200) {
                      document.getElementById("creation").innerHTML = http.responseText;
                  }
                };
            }
        </script>    
    </head>
    <body>
        <div style="color:blue; margin: auto; height: 500px; width: 500px; margin-top:50px;">
            <h1 style="font-size: 36px; color:black; text-align:center; margin: 0 auto;">User Sign up</h1>
            <p></p>
            <h2 style="font-size: 24px"> Name: </h2>
            <input class = "form-control" type="text" id="name"><br>
            <h2 style="font-size: 24px"> Email: </h2>
            <input class = "form-control" type="email" id="email"><br>
            <div id="status"></div>
            <h2 style="font-size: 24px"> Password: </h2>
            <input class = "form-control" type="password" id="password"><br><br>
            <div style="text-align:center; margin: 0 auto;">
            <button class="btn btn-primary" onclick="comeback()" style="background-color: blue; color: white;">Create</button><br><br>
            <div id="creation"></div>
            <br><br>
            <?php
                if (isset($_SESSION['sustatus'])) {
                    echo $_SESSION['sustatus'];
                    unset($_SESSION['sustatus']);
                }
            ?>
            Existing User? <a href = "index.php"><strong>Login</strong></a><br><br>
            </div>
        </div>
        </form>
    </body> 
</html>
