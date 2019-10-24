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
<header class="card-header bg-white  p-2 mb-5">

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="http://hospitalauxiliadora.com.br/">HNSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="../../home/">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://hospitalauxiliadora.com.br/noticias">Notícias</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="http://hospitalauxiliadora.com.br/contato">Contato</a>
                </li>
                <!--                <li class="nav-item">-->
                <!--                    <a class="nav-link disabled" href="#">Disabled</a>-->
                <!--                </li>-->
                <li class="nav-item dropdown align-content-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="#">Inscrições</a>
                        <a class="dropdown-item" href="../user/edit/">Cadastro</a>
                        <a class="dropdown-item" href="#">Curriculo</a>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container col-md-6 bg-light p-3">
    <h2 class="text-info" style='font-family: "Poppins", sans-serif'>Atualização de Cadastro</h2>
    <hr>
    <form action="." method="post">
        <div class="col-md-12">
            <div class="form-group">
                <label for="nome">Nome</label>
                <input class="form-control col-md-10" id='nome' type="text" placeholder="<?php echo $nome; ?>"
                       disabled>
            </div>
            <div class="form-group">
                <label for="telefone">Telefone</label>
                <input class="form-control col-md-10" id="telefone" type="text"
                       placeholder="<?php echo $telefone; ?>"
                       disabled>
            </div>
            <div class="form-group">
                <label for="celular">Celular</label>
                <input class="form-control col-md-10" id="celular" type="text"
                       placeholder="<?php echo $telefone; ?>"
                       disabled>
            </div>
            <div class="form-group">
                <label for="endereco">Endereço</label>
                <input class="form-control col-md-10" id="endereco" type="text"
                       placeholder="<?php echo $rua; ?>" disabled>
            </div>

            <div class="form-group">
                <label for="complemento">Complemento</label>
                <input class="form-control col-md-10" id="complemento" type="text"
                       placeholder="<?php echo $complemento; ?>" disabled>
            </div>


            <div class="form-row">
                <div class="form-group">
                    <label for="bairro">Bairro</label>
                    <input class="form-control col-md-10" id="bairro" type="text"
                           placeholder="<?php echo $bairro; ?>" disabled>
                </div>
                <div class="form-group">
                    <label for="uf">Estado</label>
                    <select class="form-control" id="uf" name="uf" disabled>
                        <option value="AC">AC</option>
                        <option value="AL">AL</option>
                        <option value="AP">AP</option>
                        <option value="AM">AM</option>
                        <option value="BA">BA</option>
                        <option value="CE">CE</option>
                        <option value="DF">DF</option>
                        <option value="ES">ES</option>
                        <option value="GO">GO</option>
                        <option value="MA">MA</option>
                        <option value="MT">MG</option>
                        <option value="MS">MS</option>
                        <option value="MG">MG</option>
                        <option value="PA">PA</option>
                        <option value="PB">PB</option>
                        <option value="PR">PR</option>
                        <option value="PE">PE</option>
                        <option value="PI">PI</option>
                        <option value="RJ">RJ</option>
                        <option value="RN">RN</option>
                        <option value="RS">RS</option>
                        <option value="RO">RO</option>
                        <option value="RR">RR</option>
                        <option value="SC">SC</option>
                        <option value="SP">SP</option>
                        <option value="SE">SE</option>
                        <option value="TO">TO</option>
                    </select>
                </div>
            </div>

            <button class="btn btn-info" type="button" onclick="enableEdit()">Habilitar <span
                        class="fas fa-edit"></span>
            </button>
            <input type="submit" class="btn btn-success" value="Enviar">
            <script>
                function enableEdit() {
                    document.getElementById('nome').disabled = false;
                    document.getElementById('telefone').disabled = false;
                    document.getElementById('celular').disabled = false;
                    document.getElementById('endereco').disabled = false;
                    document.getElementById('complemento').disabled = false;
                    document.getElementById('bairro').disabled = false;
                    document.getElementById('uf').disabled = false;
                }
            </script>
        </div>

    </form>
</div>
</body>
</html>
