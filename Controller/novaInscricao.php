<?php
include_once '../DAO/Inscricao.php';

$inscricao = new Inscricao();
session_start();
$userId = $_SESSION['id']; //id do usuario
$idVaga = $_SESSION['idVaga']; //id da vaga referente ao cadastro
$userName = $_SESSION['nome'];
$userPhone = $_SESSION['phone'];

if (isset($_SESSION['id'])) {
    try{
        $inscricao->novaInscricao($userId, $idVaga, $userName, $userPhone);
    } catch (PDOException $e) {
        echo $e;
    }
}
