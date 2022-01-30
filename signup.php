<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
</head>

<body>
    <form method="post">

        User:<input type="text" name="user">
        <br>
        Password:<input type="password" name="password">
        <br>
        Repeat password:<input type="password" name="repeatpassword">
        <br>
        <input type="submit" value="Sign Up">

    </form>

    <?php

    if (isset($_POST["user"], $_POST["password"], $_POST["repeatpassword"])) {

        if ($_POST["user"] == "" or $_POST["password"] == "" or $_POST["repeatpassword"] == "") {
            print "<script>alert('Something was empty')</script>";
            die();
        }

        $filename = "users.txt";

        if ($_POST["password"] != $_POST["repeatpassword"]) {
            print "<script>alert('Learn how to write');</script>";
            die();
        }

        $fp = fopen($filename, 'a+');

        $newuser = $_POST["user"] . ";" . $_POST["password"] . "\n";

        if (fwrite($fp, $newuser)) {
            echo 'saved :)';
        }

        fclose($fp);
    }


    ?>
</body>

</html>