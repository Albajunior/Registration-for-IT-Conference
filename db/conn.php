<?php
    $host='localhost';
    $db='resevationrdv';
    $user='root';
    $pass='';
    $charset='utf8mb4';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    try{
        $pdo = new PDO($dsn, $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        throw new PDOException($e->getMessage());
    }

    require_once 'crud.php';
    $crud = new crud($pdo);
    require_once 'user.php';
    $user = new user($pdo);

    $user->insertUser('admin2', 'password');
?>