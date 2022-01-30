<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?= time(); ?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Register</title>
</head>

<body>
    <?php
    include_once("navbar.php");
    navbar("register","registerGR.php", ["Home ","About ","Contact ","Email ","Phone ","Address ","Products ","Register "],"")    ?>
   
    <h1> You can register here!!!</h1>


    <form method="post">
        New Username:<input type="text" name="user"> Password:<input type="password" name="password"> Repeat Password:<input type="password" name="repeatpassword">
        <input type="submit" value="Sign Up">
    </form>

    <?php
       if (isset($_POST["user"], $_POST["password"], $_POST["repeatpassword"])) {

        if ($_POST["user"] == "" or $_POST["password"] == "" or $_POST["repeatpassword"] == "") {
            print "<script>alert('Something is wrong')</script>";
            die();
        }

        $filename = "Users.txt";

        if ($_POST["password"] != $_POST["repeatpassword"]) {
            print "<script>alert('Learn how to write');</script>";
            die();
        }

        $NameExistsCheck = fopen($filename, "r");
        while (($line = fgets($NameExistsCheck)) !== false) {
            $Userandpasswordarray = explode(";", $line);
            if ($_POST["user"] == $Userandpasswordarray[0]) {
                print "<script>alert('Username already exists');</script>";
                die();
            }
        }
        $fp = fopen($filename, 'a');
        $newuser = $_POST["user"] . ";" . $_POST["password"] . "\n";

        fwrite($fp, $newuser);
        fclose($fp);
    }
 
    ?>

<h2>Do you already have an account? Click<h2><a href="login.php">Here</a></h2></h2>
</body>

</html>