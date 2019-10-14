<?php
include '../DAO/User.php';

$user = new User();
session_start();
$_SESSION['id'] = $_GET['id'];
//verifica se o id está sendo passado
if (isset($_GET['id'])) {

    //traz a linha do usuario do banco de dados
    $sql = 'UPDATE pessoa SET verificado=1 WHERE id=? ';
    $stmt = $user->getConn()->prepare($sql);

    //se executou o sql, o cadastro foi verificado e redireciona para a home
    if ($stmt->execute([$_GET['id']])) {
        header('location: ../informacoes_pessoais/');
    } else {
        echo 'Não foi possivel confirmar o cadastro.';
    }
}
