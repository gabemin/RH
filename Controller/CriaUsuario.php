<?php

include_once('../DAO/User.php');


$retornoUser = '';
$user = new User();
if (isset($_POST['email'])) {
    $retornoUser = $user->create($_POST['email'], $_POST['password']);
    if ($retornoUser === TRUE) {
        session_start();
        $_SESSION['email'] = $_POST['email'];
        $_SESSION['modal'] = $user->modal('dados_de_acesso realizado', 'dados_de_acesso realizado com sucesso. Você pode logar agora.');
        header('location: ../dados_de_acesso/confirmacao/index.php');
    } else {
        echo $user->modal('Erro', 'Algo deu errado.');
    }
}
