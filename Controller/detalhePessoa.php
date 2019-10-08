<?php
include "../../DAO/User.php";

$user = new User();
session_start();
//busca os dados do usuario no banco.

$resultSet = $user->list($_SESSION['id']);

foreach ($resultSet as $item) {
    $nome = $item['nome'];
}