<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_POST["postReply"]) ){
        $AccountID = $_SESSION["AccountID"];
        $body = sanitize($_POST["postbody"]);
        $threadID = $_POST['postReply'];
        query("INSERT INTO posts(AccountID, Body, ReplyingTo) VALUES('$AccountID','$body', '$threadID')");
        
        return http_response_code(200);
    }

?>