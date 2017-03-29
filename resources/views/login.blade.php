<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Tikismikis - login Admin</title>
    <link href="css/login.css?" rel="stylesheet" type="text/css">
    <script>
        window.onload=function(){
            document.getElementById("login").style.top="50%";
            document.getElementById("login").style.transition="all 1s"
        }
    </script>
</head>
<body>
<div id="login">
    <h1>Tikismikis Bar Administración</h1>
    <form name="f" id="f" action="../control/LoginController.php" method="post">
        <div class="psw"><input type="text" name="user" id="user" placeholder="Usuario" maxlength="20">
        <div class="psw"><input type="password" name="psw" id="psw" placeholder="Password" maxlength="20"></div>
        <div class="psw"><input type="submit" name="enter" id="enter" value="Enter"></div>
            <div id="error"></div>
    </form>
</div>
</body>

</html>
