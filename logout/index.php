<?php
    require_once "../api/database.php";
    require_once "../api/session.php";

    session_unset();
    header("Location: ../auth");
?>