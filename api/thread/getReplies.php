<?php
    require_once __DIR__ . "/../database.php";
    require_once __DIR__ . "/../session.php";
    
    if ( isset($_GET["threadID"]) ){
        $threadID = sanitize($_GET["threadID"]);
        $q = query("SELECT * FROM posts WHERE ReplyingTo='$threadID' ORDER BY DatePosted DESC");
        $toRet = array();

        while($res = fetch($q)){
            //get the replies 
            //get the likesd
            $q2 = query("SELECT * FROM posts WHERE ReplyingTo='".$res["PostID"]."'");
            $q3 = query("SELECT * FROM likes WHERE PostID='".$res["PostID"]."'");
            //Get author ID
            $q4 = query
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