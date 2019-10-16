<?php

include '../DAO/User.php';
include '../Model/Modal.php';

$user = new User();

if (isset($_POST['nascimento'])) {
    //alterando o formato da data de nascimento para o BD não chiar.
    $_POST['nascimento']= str_replace('/','-',$_POST['nascimento']);
    $_POST['nascimento'] = date("Y-m-d",strtotime($_POST['nascimento']));
     $user->insert($_POST['nascimento'], $_POST['telefone'], $_POST['celular'], $_POST['cep'],
         $_POST['rua'], $_POST['numero'], $_POST['bairro'], $_POST['complemento'], $_POST['cidade'], $_POST['uf'], $_SESSION['id']);
     header('location:../home/index.php');
} else {
    Modal::show('Erro', 'Algo deu errado.');
}