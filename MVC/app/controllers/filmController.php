<?php
require_once __DIR__ . '/../models/filme.php';


function index(){
    $filmes = listarFilmes();
    require __DIR__ . "/../views/listar.php";
}

function deletar(){
    if(!empty($_GET['id'])){
        excluirFilmes(id: $_GET['id']);
    }
    header( "Location: index.php");
    exit;
}

function salvar() {
    if (!empty($_POST['titulo']) && !empty($_POST['diretor'])) {
        $capaPath = null;

        if (!empty($_FILES['capa']['tmp_name'])) {
            $uploadDir = __DIR__ . '/../../uploads/';
            if (!is_dir($uploadDir)) {
                mkdir($uploadDir, 0777, true);
            }

            $nomeArquivo = uniqid() . '_' . basename($_FILES['capa']['name']);
            $destino = $uploadDir . $nomeArquivo;

            if (move_uploaded_file($_FILES['capa']['tmp_name'], $destino)) {
                $capaPath = 'app/uploads/' . $nomeArquivo;
            }
        }

        adicionarFilmes(
            $_POST['titulo'],
            $_POST['diretor'],
            $_POST['ano'],
            $_POST['genero'],
            $_POST['capa'],
            $_POST['comentario'],
            $_POST['avaliacao']
        );
    }

    header("Location: index.php");
    exit;
}



function editar() {
    if (!empty($_GET['id'])) {
        $filme = buscarFilmes($_GET['id']);
        require __DIR__ . '/../views/editar.php';
    }
}

function atualizar(){
    if(!empty($_POST['id']) && !empty($_POST['titulo']) &&
    !empty($_POST['diretor'])) {
        atualizarFilmes($_POST['id'], $_POST['titulo'], $_POST['diretor'], $_POST['ano'], $_POST['genero'], $_POST['capa'], $_POST['comentario'], $_POST['avaliacao']);
    }
    header("Location: index.php");
    exit;
}

function detalhes(){
    if(!empty($_GET['id'])){
        $filme = buscarFilmes($_GET['id']);
        require __DIR__ . '/../views/detalhes.php';
    }
}
