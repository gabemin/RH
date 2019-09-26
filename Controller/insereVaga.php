<?php
include '../DAO/Vaga.php';

$vaga = new Vaga();
$retorno = '';
if (isset($_POST['titulo'])){
    echo 'Mandei Inserir!<br>';
    $retorno = $vaga->insert($_POST['titulo'], $_POST['descricao'], $_POST['beneficio'], $_POST['requisito'],
        $_POST['limite'], $_POST['quantidade'], $_POST['pcd']);
    echo $_POST['limite'];
    if($retorno === TRUE) {
        echo 'Deu certo!';
    }
    else{
        echo 'deu ruim!';
    }
}