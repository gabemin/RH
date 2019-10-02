<?php

include '../DAO/Vaga.php';

$vaga = new Vaga();


if (isset($_GET['id'])) {
    $resultSet = $vaga->detalhe($_GET['id']);
    if (count($resultSet) > 0) {
        foreach ($resultSet as $item) {
            echo
                "<div class='container bg-light col-md-6 p-5'>
            <h1>" . $item['titulo'] . "</h1>
            <h3>Descrição</h3><hr>
            <p>" . $item['descricao'] . "</p>
            <h3>Requisitos</h3><hr>
            <p>" . $item['requisitos'] . "</p>
            <h3>Benefícios</h3><hr>
            <p>" . $item['beneficios'] . "</p>
</div>";
        }

    }
} else {
    echo 'não foi possivel conectar ao banco de dados.';
}