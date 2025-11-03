<?php

function getConnection(): PDO{
    $host = "localhost";
    $db = "biblioteca_filmes";
    $user = "root";
    $pass = "leticia";

    try {
        $pdo = new PDO("mysql:host=$host;dbname=$db;charset=utf8", $user, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        return $pdo;
    } catch (PDOException $e) {
        die("Erro de conexão: " . $e->getMessage());
    }

}