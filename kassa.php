<?php
ob_start();
session_start();
?>

<!doctype html>
<html lang="sv">
    <head>
        <link rel="stylesheet" href="css/style.css" media="screen">
        <link rel="stylesheet" href="css/shoppingCart.css" media="screen">
        <meta charset="utf-8" name="viewport" content="width:device-width, initial-scale=1.0"/>
        <title>Forged Fashion</title>
    </head>

    <body>
        <wrapper id="wrapper">
            <div id="header">
            </div>

            <header id="headerText">
                <a href="index.php"><img src="images/Projektlogo.png"></img></a>
                <form id="cartForm" action="kassa.php" method="post">
                    <input id="cartButton" type="submit" value="Kundvagn"/>
                </form>
            </header>

            <nav id="navigation">
             <ul id="menu-list">
                <li><a href="nyheter.php" class="mainNav">Nyheter</a></li>
                <li><a href="dam.php" class="mainNav">Dam</a></li>
                <li><a href="herr.php" class="mainNav">Herr</a></li>
                <li><a href="rea.php" class="mainNav">REA</a></li>
            </ul>
            </nav>

            <main id="content" >

                <form action="resettingCart.php" method="post">
                    <input id="resetCartButton" type="submit" value="Rensa kundvagn"/>
                </form>

                <p id="cartText">Din shoppingbag</p>
                <ul id="shoppingCart">

                     <?php
                     if (isset($_SESSION['cart'])) {
                        $shop = $_SESSION['cart'];

                        $priceSum = 0;

                         foreach($_SESSION['cart'] as $shop) { ?>
                             <li id="products">
    <!--                             --><?php //print_r($shop); ?>
    <!--                             --><?php //echo($shop)?>
                                 <?php //print_r($shop);
                                 //var_dump($shop);
                                 print_r($shop[0][0]); ?>
                                 <p>     </p>
                                 <?php
                                 print_r($shop[0][1]) ?>  <?php; ?>
                                 <div id="Summary">Antal:
                                 <?php
                                 print_r($shop[0][2]);
                                 ?>   ( <?php print_r($shop[0][1] * $shop[0][2]) ?> :-  )<?php;
                                 ?>
                                 </div>

                                 <?php
                                 $priceSum += ($shop[0][1] * $shop[0][2]);
                                 $form =' <input class="deleteButton" type="hidden" value="'.$shop[0][0].'" name="deleteButton">
                                    <input class="deleteButton" type="submit" value="Ta bort en vara">';
                                 ?>
                                 <form method="post">
                                     <?php print_r($form)?>
                                 </form>
                             </li>
                        <?php
                     }
                     if (isset($_POST['deleteButton'])) {
                         for($i = 0; $i < count($_SESSION['cart']); $i++ ) {
                             if(isset($_SESSION['cart'][$i])) {
                                 if ($_SESSION['cart'][$i][0][0] == $_POST['deleteButton']) {
                                     if ($_SESSION['cart'][$i][0][2] > 1) {
                                         $_SESSION['cart'][$i][0][2] -= 1;
                                         header("location:kassa.php");
                                     } else {
                                         unset($_SESSION['cart'][$i]);
                                         header("location:kassa.php");
                                     }
                                 }
                             }
                         }
                     }
                     ?>
                </ul>
            <?php }
            ?>
                <form action="betalsida.php" method="post">

                    <input id="submitButton" type="submit" value="Gå vidare till kassan"/>
                </form>
                <br>
                <div id ="totalsum">TotalSumma: <?php if(isset($priceSum)){print_r($priceSum);}else{print_r("0");}
                    ?>:-</div>
            </main>

            <div id="footer">
                <ul id="info-list">
                    <li><a href="info.php" class="footerNav">Om Företaget</a></li>
                    <li><a href="kontakt.php" class="footerNav">Kontakt</a></li>
                    <li><a href="hittaButik.php" class="footerNav">Hitta Butik</a></li>
                </ul>
            </div>
        </wrapper>
    </body>
</html>
<?php
ob_end_flush();