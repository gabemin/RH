<?php

include '../DAO/User.php';
include '../Model/Modal.php';

$retornoUser = '';
$user = new User();


if (isset($_POST['email'])) {
    $retornoUser = $user->insert($_POST['nome'], $_POST['nascimento'], $_POST['telefone'], $_POST['celular'], $_POST['email'], $_POST['cep'],
        $_POST['rua'], $_POST['numero'], $_POST['bairro'], $_POST['cidade'], $_POST['estado']);

} else {
    Modal::show('Erro', 'Algo deu errado.');

}