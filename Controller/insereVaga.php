<?php
include '../DAO/Vaga.php';

$vaga = new Vaga();
$retorno = '';
if (isset($_POST['titulo'])){
    $retorno = $vaga->insert($_POST['titulo'], $_POST['descricao'], $_POST['requisito'], $_POST['beneficio'],
        $_POST['limite'], $_POST['quantidade'], $_POST['pcd']);
}