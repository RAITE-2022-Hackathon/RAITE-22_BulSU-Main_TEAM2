<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_POST["Username"]) ){

        $user = sanitize($_POST[""]);
        $pass = sanitize($_POST[""]);
        $cpass = sanitize($_POST[""]);
        $email = sanitize($_POST[""]);
        $twofa = sanitize($_POST[""]);
        
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
        if ( numrows($q)!==0 )
            return http_response_code(403);
        //Check if 2fa is correct
        if ( strcmp($twofa, $_SESSION["2FA"])!==0 )
            return http_response_code(404);
        
        //Create the account if all passed
        query("INSERT INTO users(Username, Password, Email) VALUES('$user','$pass','$email')");
        return http_response_code(200);
    }
?>