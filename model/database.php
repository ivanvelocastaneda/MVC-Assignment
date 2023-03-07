<?php
    $dsn = 'mysql:host=localhost;dbname=todolist';
    $username = 'root';
    $password = '';

    try {
        $db = new PDO($dsn, $username, $password);
    } catch (PDOException $e) {
        $error_message = $e->getMessage();
        include('model/database_error.php');
        exit();
    }
?>