<?php
?>

<!doctype html>
<html lang="sv">
    <head>
    <link rel="stylesheet" href="css/style.css" media="screen">
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
                <li><a href="index.php" class="mainNav">Nyheter</a></li>
                <li><a href="dam.php" class="mainNav">Dam</a></li>
                <li><a href="herr.php" class="mainNav">Herr</a></li>
                <li><a href="rea.php" class="mainNav">REA</a></li>
            </ul>
            </nav>

            <main id="content">
                <div id="map-canvas"></div>
                <div id="text-holder">
                    <h3>Kontakta oss!</h3>
                    <p>Telefon nummer: 0470-143 23</p>
                    <p>Fax: 2345555554425</p>
                    <p>Mailadress: info@forgedfashion.se</p>
                </div>
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