<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_GET["userID"]) ){
        $userID = sanitize($_GET["userID"]);
        $q = query("SELECT * FROM posts WHERE AccountID='$userID' AND ReplyingTo IS NULL ORDER BY DatePosted DESC");
        $toRet = array();

        while($res = fetch($q)){
            //get the replies 
            //get the likesd
            $q2 = query("SELECT * FROM posts WHERE ReplyingTo='".$res["PostID"]."'");
            $q3 = query("SELECT * FROM likes WHERE PostID='".$res["PostID"]."'");
            array_push($toRet, array(
                $res["PostID"],
                $res["AccountID"],
                $res["DatePosted"],
                $res["Body"],
                numrows($q2),
                numrows($q3)
            ));

        }
        echo json_encode($toRet);
    }

?>