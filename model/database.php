<?php
    // Heroku connection
    $dsn = 'mysql:host=u6354r3es4optspf.cbetxkdyhwsb.us-east-1.rds.amazonaws.com;dbname=wqynmrlu0rnt5epv';
    $username = 'h0pv4uzkya2kb1o5';
    $password = 'uszhmvpb8vqd4i7m'; 
    
    try {
        // Heroku connection
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error = "Database Error: ";
        $error .= $e->getMessage();
        include('../view/error.php');
        exit();
    }
?>