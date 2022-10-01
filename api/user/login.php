<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_POST["auth-login-username"]) ){
        $user = sanitize($_POST["auth-login-username"]);
        $pass = sanitize($_POST["auth-login-password"]);
        
        $q = query("SELECT * FROM users WHERE Email='$user' AND Password='$pass'");

        if( numrows($q)==0 ){
            return http_response_code(404);
        }

        $_SESSION["AccountID"] = fetch($q)["AccountID"];
        return http_response_code(200);

    }
?>