<?php

include_once('../DAO/User.php');

$user = new User();
$retornoUser = '';
if (isset($_POST['email'])) {
    $retornoUser = $user->create($_POST['email'], $_POST['password']);
    session_start();
    $_SESSION['id'] = $user->getConn()->lastInsertId();

    if ($retornoUser === TRUE) {

        $_SESSION['email'] = $_POST['email'];
        $_SESSION['modal'] = $user->modal('dados_de_acesso realizado', 'dados_de_acesso realizado com sucesso. Você pode logar agora.');
        header('location: ../dados_de_acesso/confirmacao/index.php');
    } else {
        echo $user->modal('Erro', 'Algo deu errado.');
    }
}
