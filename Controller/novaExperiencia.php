<?php
include_once '../../../DAO/Experiencia.php';
include_once '../../../Model/Modal.php';
session_start();
$idPessoa = $_SESSION['id'];

$experiencia = new Experiencia();
if(!isset($_POST['empregoAtual'])){
    $empregoAtual = 0;
}
else {
    $empregoAtual = 1;
}
if(isset($_POST['empresa'])){
    $experiencia->create($idPessoa, $_POST['empresa'],$_POST['inicio'], $_POST['fim'], $empregoAtual, $_POST['descricaoCargo']);
} else{
    Modal::show('Erro', 'Algo deu errado');
}
