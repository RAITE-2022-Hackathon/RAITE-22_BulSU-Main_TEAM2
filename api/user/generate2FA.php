<?php
    require_once __DIR__."/../session.php";
    
    function gen2FA(){
        $nums = "0123456789";
        $toRet = "";
        for($i = 0 ; $i <6 ; $i++){
            $toRet .= $nums[rand(0, strlen($nums)-1)];
        }
        $_SESSION["2FA"] = $toRet;
        return $toRet;
    }
?>