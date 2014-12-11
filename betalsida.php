<?php

?>
<!doctype html>
<html lang="sv">
<head>
    <link rel="stylesheet" href="css/style.css" media="screen">
    <meta charset="utf-8" name="viewport" content="width:device-width, initial-scale=1.0"/>
    <title>Forged Fashion</title>
</head>

<body>
<wrapper id="wrapper">
    <div id="header">
        <a href="kassa.php" id="kassa">Kassa</a>
    </div>

    <header id="headerText">
        <a href="index.php"><img src="images/Projektlogo.png"></img></a>
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

        <form action="" id="payForm" method="post" class="STYLE-NAME">
            <h1>Fyll i dina person- och betaluppgifter</h1>
            <div>
            <label>
                <span>För och efternamn :</span>
                <input id="name" type="text"  placeholder="Ditt fullständiga namn" />
            </label>
            </div>
            <div>
            <label>
                <span>Personnummer :</span>
                <input id="email" type="text"  placeholder="YY-MM-DD-XXXX" />
            </label>
            </div>
            <div>
                <label>
                    <span>Adress :</span>
                    <input id="name" type="text"  placeholder="Adress" />
                </label>
            </div>
            <div>
                <label>
                    <span>Postnummer :</span>
                    <input id="email" type="text"  placeholder="XXX-XX" />
                </label>
            </div>
            <div>
                <label>
                    <span>PostOrt :</span>
                    <input id="name" type="text"  placeholder="PostOrt" />
                </label>
            </div>
            <div>
                <label>
                    <span>Kortuppgifter :</span>
                    <input id="email" type="text" placeholder="Kortuppgifter" />
                </label>
            </div>
            <div>
            <label>
                <span>&nbsp;</span>
                <input type="button" id="formButton" value="Skicka" />
            </label>
            </div>
        </form>
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