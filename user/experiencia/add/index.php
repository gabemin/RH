<?php
include_once "../../../Controller/novaExperiencia.php"
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script type="text/javascript">

        $(document).ready(function () {

            if ($(".modal").length) {
                $(".modal").modal('show')
            }

        });

    </script>
</head>
<body>
<header class="card-header bg-white  p-2 mb-5">

    <nav class="navbar navbar-expand-md navbar-light bg-light">
        <a class="navbar-brand" href="#">HNSA</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown"
                aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Alterna navegação">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link active" href="">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Link</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link disabled" href="#">Disabled</a>
                </li>
                <li class="nav-item dropdown align-content-end">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" role="button"
                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Menu
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                        <a class="dropdown-item" href="../user/edit/">Visualizar Cadastro</a>
                        <a class="dropdown-item" href="#">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>
<div class="container col-md-6 bg-light">
    <h2>Experiencia profissional</h2>
    <hr>
    <form action="." method="post">
        <div class="form-group">
            <label for="empresa">Empresa</label>
            <input class="form-control" type="text" name="empresa" placeholder="Nome da Empresa">
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="inicio">Início</label>
                <input class="form-control align-content-start" type="text" name="inicio">
            </div>

            <div class="form-group  pl-5">
                <label for="fim">Fim</label>
                <input class="form-control" type="text" name="fim">
            </div>

            <div class="form-group">
                <label for="empregoAtual">Emprego Atual</label>
                <input class="form-control" type="checkbox" id="empregoAtual" name = "empregoAtual">
            </div>


        </div>
        <div class="form-group ">
            <label for="descricaoCargo">Descrição</label>
            <textarea class="form-control" name="descricaoCargo" style="height: 30%;width: 100%;"
                        placeholder="Descreva as atividades que desempenhava neste emprego..."></textarea>
        </div>
        <div class="form-row float-right">
            <div class="form-group p-2">
                <a href="../../../home"><button type="button" class="btn btn-danger">Voltar</button></a>
            </div>
            <div class="form-group p-2">
                <input type="reset" class="btn btn-secondary" value="Limpar">
            </div>
            <div class="form-group p-2">
                <input type="submit" class="btn btn-success" value="Enviar">
            </div>
        </div>

    </form>
</div>
</body>