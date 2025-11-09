<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

require_once __DIR__ . "/app/controllers/filmController.php";

$acao = $_GET['acao'] ?? 'index';

switch($acao){
    case 'index':
        index();
        break;
    case 'delete':
        deletar();
        break;
    case 'form':
        require __DIR__ . "/app/views/adicionar.php";
        break;
    case 'salvar':
        salvar();
        break;
    case 'atualizar';
        atualizar();
        break;
    case 'detalhes':
        detalhes();
        break;
    default:
        echo "Ação não encontrada!";
}