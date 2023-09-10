<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="public/css/login.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>

    <form method="post" action="" >
        <h1 class="title">Login</h1>
        <?php
        include("BD/config.php");
        include("controlador/controlador_login.php"); 
        ?>
        <label for="" class="field">
            <i class="fa-solid fa-user"></i>
            <input placeholder="username" type="text" id="username" name="username" pattern="[A-Za-z0-9_-]{1,15}"  >
        </label>
        <label class="field">
            <i class="fa-solid fa-lock"></i>
            <input placeholder="password" type="password" id="password" name="password" pattern="[A-Za-z0-9_-]{1,15}"  >
        </label>
        <a href="#" class="link">Forgot your password</a>
        <input class="btn" name="ingresarbtn" id="button" type="submit" value="INICIAR SESSION">
    </form>

</body>
</html>