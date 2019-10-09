<?php
include_once "../../DAO/User.php";

$user = new User();
//busca os dados do usuario no banco.
$nome = '';
$nascimento= '';
$telefone = '';
$celular = '';
$CEP = '';
$rua = '';
$numero = '';
$bairro = '';
$complemento = '';
$cidade = '';
$estado = '';
$resultSet = $user->list($_SESSION['id']);
echo $_SESSION['id'];
foreach ($resultSet as $item) {
    $nome = $item['Nome'];
    $telefone = $item['Telefone'];
    $CEP = $item['CEP'];
    $rua = $item['Rua'];
    $numero = $item['Numero'];
    $bairro = $item['Bairro'];
    $estado = $item['Estado'];
}