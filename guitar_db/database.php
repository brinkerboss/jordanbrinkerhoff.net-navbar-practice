<?php
    $dsn = 'mysql:host=localhost;dbname=jordanbr_guitarshop1';
    $username = 'jordanbr_visitor';
    $password = 'r3dFa1con!!!';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('database_error.php');
        exit();
    }
?>