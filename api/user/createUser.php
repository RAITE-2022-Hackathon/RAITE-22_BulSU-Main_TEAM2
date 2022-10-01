<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_POST["auth-register-email"]) ){

        $user = sanitize($_POST["auth-register-username"]);
        $pass = sanitize($_POST["auth-register-password"]);
        $cpass = sanitize($_POST["auth-register-passwordc"]);
        $email = sanitize($_POST["auth-register-email"]);
        $twofa = sanitize($_POST["auth-register-code"]);
        
        //First check if username is taken
        $q = query("SELECT * FROM users WHERE Username='$user'");

        if ( numrows($q)!==0 )
            return http_response_code(400);
        //password do not match
        if ( strcmp($pass,$cpass)!==0 )
            return http_response_code(401);
        if ( strlen($pass)==0 && strlen($cpass)==0 ) 
            return http_response_code(402);
        //Check if email is taken
        $q = query("SELECT * FROM users WHERE Email='$email'");
        if ( numrows($q)!=0 )
            return http_response_code(403);
        //Check if 2fa is correct
        if ( strcmp($twofa, $_SESSION["2FA"])!==0 ){
            echo $twofa;
            echo $_SESSION["2FA"];
            exit;
            return http_response_code(404);
        }
        
        //Create the account if all passed
        query("INSERT INTO users(Username, Password, Email) VALUES('$user','$pass','$email')");
        $q = fetch(query("SELECT AccountID FROM users WHERE Username='$user')"))["AccountID"];
        //Set the session
        $_SESSION["AccountID"] = $q;
        return http_response_code(200);
    }
?>