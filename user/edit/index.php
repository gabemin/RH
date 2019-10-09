<?php
include "../../Controller/updateUser.php";
include "../../Controller/detalhePessoa.php";
?>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"
            integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"
            integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy"
            crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7767dc31b8.js" crossorigin="anonymous"></script>
    <title>Document</title>
</head>
<body>
<div class="container col-md-6 bg-light p-3">
    <h2 class="text-info" style='font-family: "Poppins", sans-serif'>Atualização Cadastral</h2>
    <hr>
    <form action="." method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nome">Nome</label>
                <div class="form-row">
                    <input class="form-control col-md-10" id='nome' type="text" placeholder="<?php echo $nome; ?>"
                           disabled>
                    <button class="btn" type="button" id="button" onclick="enableNome()">
                        <span class="fas fa-edit"></span>
                    </button>
                </div>
                <script>
                    function enableNome() {
                        document.getElementById("nome").disabled = false;
                    }
                </script>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <div class="form-row">
                    <input class="form-control  col-md-10" id="telefone" type="text"
                           placeholder="<?php echo $telefone; ?>"
                           disabled>
                    <button class="btn" type="button" id="button" onclick="enableTel()">
                        <span class="fas fa-edit"></span>
                    </button>
                </div>
                <script>
                    function enableTel() {
                        document.getElementById("telefone").disabled = false;
                    }
                </script>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <div class="form-row">
                    <div class="form-row">
                        <input class="form-control  col-md-10" id="endereco" type="text"
                               placeholder="<?php echo $rua; ?>" disabled>
                        <button class="btn" type="button" id="button" onclick="enableTel()">
                            <span class="fas fa-edit"></span></button>
                    </div>
                </div>
                <script>
                    function enable() {
                        document.getElementById("endereco").disabled = false;
                    }
                </script>
            </div>
            <div class="form-group">
                <label for="numero">Número</label>
                <input class="form-control" id="numero" type="text" placeholder="<?php echo $numero; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input class="form-control" id="complemento" type="text" placeholder="<?php echo $complemento; ?>"
                       disabled>
            </div>
            <label for="bairro">Bairro</label>
            <div class="form-group">
                <input class="form-control" id="bairro" type="text" placeholder="<?php echo $bairro; ?>" disabled>
            </div>
            <div class="form-group">
                <label for="uf">UF</label>
                <input class="form-control" id="uf" type="text" placeholder="<?php echo $estado; ?>" disabled>
            </div>
        </div>
    </form>
</div>
</body>
</html>
