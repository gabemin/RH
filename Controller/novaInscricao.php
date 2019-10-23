<?php
include_once '../DAO/Inscricao.php';

$inscricao = new Inscricao();
session_start();
$userId = $_SESSION['id']; //id do usuario
$idVaga = $_GET['id']; //id da vaga referente ao cadastro
$userName = $_SESSION['nome'];
$userPhone = $_SESSION['phone'];

if (isset($_SESSION['id'])) {
    $inscricao->novaInscricao($userId, $idVaga, $userName, $userPhone);
    echo 'entrou aqui';
}
