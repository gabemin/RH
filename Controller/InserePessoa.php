<?php

include '../DAO/User.php';
include '../Model/Modal.php';

$user = new User();

echo 'bu';
//
if (isset($_SESSION['id'])) {
    echo 'oi';
     $user->insert($_POST['nascimento'], $_POST['telefone'], $_POST['celular'], $_POST['cep'],
         $_POST['rua'], $_POST['numero'], $_POST['bairro'], $_POST['complemento'], $_POST['cidade'], $_POST['uf'], $id);

} else {
    echo 'ei';
    Modal::show('Erro', 'Algo deu errado.');

}