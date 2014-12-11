<?php
$link = new mysqli('localhost', 'root', '', 'forgedfashion');
if (!$link) {
    die('Could not connect: ' . mysql_error());
}
//mysqli_close($link);
?>