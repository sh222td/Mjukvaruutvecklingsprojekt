<?php
require_once('php/reading.php');
session_start();
$result = $link->query('CALL `NyhetsLista`()');
?>

<!doctype html>
<html lang="sv">
    <head>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="css/sidemenu.css" media="screen">
    <link rel="icon" type="image/ico" href="../pics/favicon.ico"/>
    <link rel="apple-touch-icon" href="../pics/shroomtwo.png" sizes="74*74"/>
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
                <li><a href="nyheter.php" class="active" class="mainNav">Nyheter</a></li>
                <li><a href="dam.php" class="mainNav">Dam</a></li>
                <li><a href="herr.php" class="mainNav">Herr</a></li>
                <li><a href="rea.php" class="mainNav">REA</a></li>
            </ul>
            </nav>

            <main id="content">
                <ul>
                    <?php while ($row = $result->fetch_assoc()) { ?>

                        <li id="list">
                            <form method="post">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['name']); ?>" name="product_id">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['price']); ?>" name="price">
                                <input id="productButton" type="submit" value="Lägg till i kassa">
                            </form>
                            <span class="name"><?php echo($row['name']); ?></span>
                            <br>
                            <span class="price"><?php echo($row['price']); ?></span>
                        </li>

                    <?php } ?>
                </ul>
                <?php
                //Lägger till varor i kundvagnen
                if(isset($_POST['product_id']) ){
                    if(empty($_SESSION['cart'])){
                        $_SESSION['cart'] = array();
                    }
                    $added = FALSE;

                    //Om det läggs till fler av samma vara så ändras "antal" värdet
                    for($i = 0; $i < count($_SESSION['cart']); $i++ ) {
                        if ($_POST['product_id'] == $_SESSION['cart'][$i][0][0]) {

                            $_SESSION['cart'][$i][0][2] += 1;
                            $added = TRUE;
                        }
                    }
                    if($added == FALSE){
                        $shop = array (
                            array($_POST['product_id'],$_POST['price'], 1 )
                        );
                        array_push($_SESSION['cart'], $shop);
                    }
                }
                ?>

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