<?php
include "../Controller/updateUser.php";
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<div class="container col-md-4 bg-light p-3">
    <form>
        <div class="col-md-12">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" id='nome' type="text">
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control"  id="telefone" type="text">
            </div>
            <div class="form-group ">
                <label for="endereco">Endereço</label>
                <input class="form-control" id="endereco" type="text">
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input class="form-control" id="numero" type="text">
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input class="form-control" id="complemento" type="text">
            </div>
            <label for="bairro">Bairro</label>
            <div class="form-group">
                <input class="form-control" id="bairro" type="text">
            </div>
            <div class="form-group">
                <label for="uf">UF</label>
                <input class="form-control" id="uf" type="text">
            </div>
        </div>
    </form>
</div>
</body>
</html>
