<?php

include '../../DAO/User.php';

$retornoUser= '';
$user = new User();
if (isset($_POST['email'])) {
    $retornoUser = $user->create($_POST['email'], $_POST['password']);
    if ($retornoUser === TRUE) {
        session_start();
        $_SESSION['modal'] =  $user->modal('Cadastro realizado',
            'Cadastro realizado com sucesso. Você pode logar agora.');
        header('location: ../index.php');
    } else {
        echo $user->modal('Erro', 'Algo deu errado.');
    }

}
