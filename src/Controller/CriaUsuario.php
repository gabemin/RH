<?php

include '../../DAO/User.php';

$retornoUser= '';
$user = new User();
if (isset($_POST['email'])){
    $retornoUser = $user->create($_POST['email'], $_POST['password']);

    echo $user->modal('AAAAEEEE', 'Deu certo!!!');
} else {
    $user->modal('Deu Ruim!', 'BURRRRRO!!!');

}
