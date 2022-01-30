<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' type='text/css' media='screen' href='include/css/main.css?t=<?=time();?>'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title>Document</title>
</head>
<body>]

<?php 
      include_once("navbar.php");
      navbar("productsGR","products.php", ["Αρχική","Σχετικά","Τρόποι Επικοινωνιάς","Email","Κινήτο","Διεύθυνση","Προϊόντα","Εγγραφή"],"GR")
?>

<h1>Προϊόντα προς πώληση</h1>
    <div class="allpro">
        <?php
        $filehandle = fopen("include/products.csv", "r");

        while (($line = fgets($filehandle)) != false) {

            $arrOfPieces = explode(";", $line);
            if (count($arrOfPieces) == 10) {
        ?>


                <div class="column">
                    <h2><?= $arrOfPieces[1+5] ?></h2>
                    <p><a href="showproductsGR.php?productid=<?= $arrOfPieces[0] ?>"><img src="include/images/<?= $arrOfPieces[5] ?>" /></a></p>
                    <h5><?= $arrOfPieces[2+5] ?></h5>
                    <h4><?= $arrOfPieces[4+5] ?></h4>
                </div>

            <?php
            }
            ?>
            <?php
        }
        ?>
</body>
</html>


