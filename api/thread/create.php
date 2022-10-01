<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_POST["newThread"]) ){
        $AccountID = $_SESSION["AccountID"];;
        $body = sanitize($_POST["postbody"]);
        query("INSERT INTO posts(AccountID, Body) VALUES('$AccountID','$body')");
        
        return http_response_code(200);
    }

?>