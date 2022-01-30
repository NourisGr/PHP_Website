<!DOCTYPE html>
<html lang="en">

<head>
<meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?=time();?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Products</title>
</head>

<body>

<?php 
      include_once("navbar.php");
      navbar("productsGR","products.php", ["Αρχική","Σχετικά","Τρόποι Επικοινωνιάς","Email","Κινήτο","Διεύθυνση","Προϊόντα","Εγγραφή"],"GR")
?>

    <?php
    if (isset($_GET["productid"])) {

        $filehandle = fopen("include/products.csv", "r");

        while (($line = fgets($filehandle)) != false) {
            $arrOfPieces = explode(";", $line);
            if ($_GET["productid"] ==  $arrOfPieces[0]) {
    ?>


                <div class="allpro">
                    <div class="column">
                        <h2><?= $arrOfPieces[1+5] ?></h2>
                        <p><img src="include/images/<?= $arrOfPieces[5] ?>" /></a></p>
                        <h5><?= $arrOfPieces[3+5] ?></h5>
                        <h4><?= $arrOfPieces[4+5] ?></h4>
                    </div>
                </div>


    <?php
            }
        }
    } else {
        die("Page not found");
    }
    ?>
</body>

</html>