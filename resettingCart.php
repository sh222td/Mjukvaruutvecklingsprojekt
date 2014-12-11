<?php
session_start();
if(isset($_SESSION['cart'])){
    unset($_SESSION['cart']);
    session_destroy();

}
header("location:kassa.php"); //to redirect back to "index.php" after logging out

