<?php

function getConnection(): PDO {
$host = "127.0.0.1";
    $db   = "biblioteca_filmes";
    $port = 3306;
    $user = "root";
    $pass = "leticia";

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro de conexão: " . $e->getMessage());
    }
}
