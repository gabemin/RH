<?php

include '../../DAO/User.php';

$retornoUser= '';


if (isset($_POST['email'])){
    $user = new User();

    $retornoUser = $user->insert($_POST['nome'], $_POST['nascimento'],$_POST['email'], $_POST['senha'],
        $_POST['endereco'], $_POST['enderecoNum'], $_POST['bairro'], $_POST['cidade'], $_POST['UF']);

    echo $user->modal('AAAAEEEE', 'Deu certo!!!');
} else {
    $user = new User();
    $user->modal('Deu Ruim!', 'BURRRRRO!!!');

}
