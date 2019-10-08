<?php
include "../../Controller/updateUser.php";
include "../../Controller/detalhePessoa.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container col-md-4 bg-light p-3">
    <h2 class="text-info" style='font-family: "Poppins", sans-serif'>Atualização Cadastral</h2>
    <hr>
    <form>
        <div class="col-md-12">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control" id='nome' type="text" placeholder="<?php echo $nome?>">
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
