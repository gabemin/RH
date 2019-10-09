<?php
    include_once "../../DAO/User.php";

    $user = new User();
    session_start();
    $retorno='';
    if(isset($_POST['email'])) {
        $retorno = $user->update($_POST['nome'], $_POST['telefone'], $_POST['endereco'],$_POST['numero'],$_POST['complemento'],
            $_POST['cidade'], $_POST['uf'], $_POST['senha']);

        if($retorno == TRUE){
            $_SESSION['modal'] = $user->modal('Sucesso!', 'Dados atualizados com sucesso.');
            header('location: ../dados_de_acesso/confirmacao/index.php');
        } else {
            echo $user->modal('Erro', 'Algo deu errado.');
        }
    }
