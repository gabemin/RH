<?php

include '../DAO/Vaga.php';

$vaga = new Vaga();


if (isset($_GET['id'])) {
    $rs = $vaga->detalhe($_GET['id']);
    if (count($rs) > 0) {
        foreach ($rs as $arr) {
            echo
                "<div class='container bg-light'>
            <div>
            <h1>" . $arr['titulo'] . "</h1>
            <h3>Descrição</h3><hr>
            <p>". $arr['descricao'] ."</p>
            <h3>Requisitos</h3><hr>
            <p>". $arr['requisitos'] ."</p>
            <h3>beneficios</h3><hr>
            <p>". $arr['beneficios'] ."</p>
</div>
                
</div>";
        }

    }
} else {
    echo 'não foi possivel conectar ao banco de dados.';
}
