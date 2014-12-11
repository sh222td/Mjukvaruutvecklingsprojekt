<?php
require_once('php/reading.php');
session_start();
?>

<!doctype html>
<html lang="sv"> 
    <head> 
    <link rel="stylesheet" href="css/style.css" media="screen">
    <link rel="stylesheet" href="css/sidemenu.css" media="screen">
        <meta charset="utf-8" name="viewport" content="width:device-width, initial-scale=1.0"/>

        <title>Forged Fashion</title> 
    </head> 

    <body>

    <script src="script/script.js"></script>

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
                <li><a href="dam.php" class="active" class="mainNav">Dam</a></li>
                <li><a href="herr.php" class="mainNav">Herr</a></li>
                <li><a href="rea.php" class="mainNav">REA</a></li>
            </ul>
            </nav>
            
            <div>
                <ul id="side-menu">
                    <h3>DAM</h3>
                    <li><a id="kvinnotro" href=# class="sideNav">Tröjor</a></li>
                    <li><a id="kvinnobyx" href=# class="sideNav">Byxor</a></li>
                    <li><a id="kvinnosko" href=# class="sideNav">Skor</a></li>
                </ul>
            </div>
            
            <main id="content">

                <img id="bild" src="images/dambild.png"></img>

                <ul id="damTro">
                    <?php

                    $r = mysqli_query($link, " CALL `DamTrojaLista`(); ");
                    while($row = mysqli_fetch_assoc($r)) { ?>
                        <li id="list">
                            <form method="post">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['name']); ?>" name="product_id">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['price']); ?>" name="price">
                                <input id="productButton" type="submit" value="Lägg till i kundvagnen">
                            </form>
                            <span class="name" ><?php print_r($row['name']); ?></span>
                            <br>
                            <span class="price"><?php print_r($row['price']); ?></span>
                        </li>

                    <?php
                    }
                    ?>
                    <?php
                    mysqli_free_result($r);
                    mysqli_next_result($link);
                    ?>
                </ul>

                <ul id="damByx">
                    <?php
                    $rew = mysqli_query($link, " CALL `DamByxorLista`(); ");
                    while($row = mysqli_fetch_assoc($rew)) { ?>
                        <li id="list">
                            <form method="post">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['name']); ?>" name="product_id">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['price']); ?>" name="price">
                                <input id="productButton" type="submit" value="Lägg till i kassa">
                            </form>
                            <span class="name" ><?php print_r($row['name']); ?></span>
                            <br>
                            <span class="price"><?php print_r($row['price']); ?></span>
                        </li>
                    <?php
                    }
                    mysqli_free_result($rew);
                    mysqli_next_result($link);
                    ?>
                </ul>

                <ul id="damSko">
                    <?php
                    $raw = mysqli_query($link, " CALL `DamSkorLista`(); ");
                    while($row = mysqli_fetch_assoc($raw)) { ?>
                        <li id="list">
                            <form method="post">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['name']); ?>" name="product_id">
                                <input id="shoppingName" type="hidden" value="<?php print_r($row['price']); ?>" name="price">
                                <input id="productButton" type="submit" value="Lägg till i kassa">
                            </form>
                            <span class="name" ><?php print_r($row['name']); ?></span>
                            <br>
                            <span class="price"><?php print_r($row['price']); ?></span>
                            <br>
                            <div id="image"></div>
                        </li>
                    <?php
                    }
                    mysqli_free_result($raw);
                    mysqli_next_result($link);
                    mysqli_close($link);
                    ?>
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