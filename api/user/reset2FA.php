<?php
    require_once __DIR__."/../session.php";
    if( isset($_POST["reset2FA"]) ){
        $_SESSION["2FA"]=microtime(true);
    }
?>