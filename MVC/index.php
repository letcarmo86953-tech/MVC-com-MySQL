<?php

require_once __DIR__ . "/controllers/filmController.php";

$acao = $_GET['acao'] ?? 'index';

switch($acao){
    case 'index':
        index();
        break;
    case 'delete':
        deletar();
        break;
    case 'form':
        require __DIR__ . "/views/detalhes.php";
        break;
    case 'salvar':
        salvar();
        break;
    case 'atualizar';
        atualizar();
        break;
    default:
        echo "Ação não encontrada!";
}