<?php
    $DB_HOST = 'localhost';
    $DB_USER = 'root';
    $DB_PASS = '';
    $DB_DBNAME = 'raitebulsuteam22022';

    $con = mysqli_connect($DB_HOST,$DB_USER,$DB_PASS,$DB_DBNAME);
    if(!$con)
        die("Database Error: " . mysqli_error($con));
    
    function query($q){
        global $con;
        return mysqli_query($con, $q);
    }
    function fetch($q){
        return mysqli_fetch_assoc($q);
    }
    function numrows($q){
        global $con;
        return mysqli_num_rows($q);
    }
    function sanitize($q){
        global $con;
        return mysqli_real_escape_string($con, $q);
    }
?>