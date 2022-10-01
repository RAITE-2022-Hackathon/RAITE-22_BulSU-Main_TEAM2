<?php
    require_once "../database.php";
    function 
    if ( isset($_POST["Username"]) ){
        $user = $_POST[""];
        $pass = $_POST[""];
        $cpass = $_POST[""];
        $email = $_POST[""];

        if( strcmp($pass, $cpass)!==0 )
            return 
    }
?>