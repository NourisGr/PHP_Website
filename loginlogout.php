<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
</head>

<body>


    <?php
    session_start();
    if (isset($_SESSION["UserLogged"])) {
        $_SESSION["UserLogged"] = false;
    }

    if (isset($_POST["Login"])) {
        print("You clicked login");
        $_SESSION["UserLogged"] = true;
    }

    if (isset($_POST["Logout"])) {
        print("You are out now");
        $_SESSION["UserLogged"] = false;
    }

    if ($_SESSION["UserLogged"]) {
        ?>
    <form method="POST">
    <input type="submit" name="Logout" value="GoOut">
    </form>
 
    <?php
    } else { ?>

<form method="POST">
    <input type="submit" name="Login" value="GoIn">
    </form>

    <?php }
   ?>
</body>

</html>