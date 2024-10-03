<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Strona</title>
    <link rel="stylesheet" href="style.css">
    <script src="script.js"></script>
</head>

<body>
    <div class="logo" href="index.php"><b>LOGO</b></div>

    <div class="burger" onclick="burgerclick();" id="burger">
        <img src="burger.png"></img>
    </div>

    <div class="menu" id="menu">
        <a href="login.php" class="menuItem">ZALOGUJ</a>
        <b class="menuItem">ZAREJESTRUJ</b>
    </div>


    <h1>ZAREJESTRUJ</h1>

    <form action="do_register.php" id="form">
        <p><label> Login:</label><input type="text" name="login"></p>
        <p><label> Nick:</label><input type="text" name="nick"></p>
        <p><label> Password:</label><input type="password" name="password"></p>
        <p><label>Confirm password:</label><input type="password" name="Confirm_password"></p>
        <p><label></label><input type="submit" name="submit" value="Zarejestruj"></p>
    </form>

</body>

</html>