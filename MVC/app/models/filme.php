<?php
require_once __DIR__ . "/../config/database.php";

function listarFilmes(){
    $pdo = getConnection();
    $sql = "SELECT * FROM filmes";
    $stmt = $pdo -> query($sql);
    return $stmt -> fetchAll(PDO::FETCH_ASSOC);
}

function adicionarFilmes($titulo, $diretor, $ano, $genero, $capa, $comentario, $avaliacao){
    $pdo = getConnection();
    $sql = "INSERT INTO filmes (titulo, diretor, ano, genero, capa, comentario) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = $pdo -> prepare($sql);
    return $stmt -> execute([$titulo, $diretor, $ano, $genero, $capa, $comentario, $avaliacao]);
}

function atualizarFilmes($id,$titulo, $diretor, $ano, $genero, $capa, $comentario, $avaliacao){
    $pdo = getConnection();
    $sql = "UPDATE filmes SET titulo = ?, diretor = ?, ano = ?, genero = ?, capa = ?, comentario = ?, avaliacao = ? WHERE id = ?";
    $stmt = $pdo -> prepare($sql);
    return $stmt -> execute([$titulo, $diretor, $ano, $genero, $capa, $comentario, $avaliacao, $id]);
}

function excluirFilmes($id){
    $pdo = getConnection();
    $sql = "DELETE FROM filmes WHERE id = ?";
    $stmt = $pdo -> query($sql);
    return $stmt -> execute([$id]); 
}