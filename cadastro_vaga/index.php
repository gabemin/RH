<?php
include '../Controller/insereVaga.php'
?>

<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
            integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
            crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
            integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
            crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
            integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
            crossorigin="anonymous"></script>
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
                    <a class="nav-link active" href="">Home</a>
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
                        <a class="dropdown-item" href="../Controller/Logout.php">Sair</a>
                    </div>
                </li>
            </ul>
        </div>
    </nav>
</header>


<div class="container bg-light p-5">
    <div class="text-left text-info pl-3 pt-3"><h1>Cadastro de vagas</h1></div>
    <hr>


    <div class="row">
        <form action="." method="post">
            <div class="col-md-6 p-5 float-left">
                <div class="form-group">
                    <label for="titulo">Título<span class="text-danger">*</span></label>
                    <input class="form-control" name="titulo" id="titulo" type="text" placeholder="Título da Vaga"
                           required>
                </div>
                <div class="form-group">
                    <label for="descricao">Descrição<span class="text-danger">*</span></label>
                    <textarea class="form-control" name="descricao" id="descricao" cols="30" rows="10"
                              placeholder="Dê uma descrição para a vaga" required></textarea>
                </div>
                <div class="form-group">
                    <label for="requisito">Pré - Requisitos<span class="text-danger">*</span></label>
                    <textarea class="form-control" name="requisito" id="requisito" cols="30" rows="10"
                              placeholder="Indique os requisitos para a vaga" required></textarea>
                </div>
            </div>
            <div class="col-md-6 p-5 float-right">
                <div class="form-group">
                    <label for="beneficio">Benefícios<span class="text-danger">*</span></label>
                    <textarea class="form-control" name="beneficio" id="beneficio" cols="30" rows="10"
                              placeholder="Indique os benefícios da vaga" required></textarea>
                </div>
                <div class="form-group">
                    <label for="limite">Data Limite<span class="text-danger">*</span></label>
                    <input class="form-control" type="date" name="limite" id="limite" required>
                </div>
                <div class="form-group">
                    <label for="quantidade">Quantidade de Vagas: </label>
                    <input class="form-control" type="text" name="quantidade" id="quantidade" value="1" required>
                </div>
                <div class="form-group">
                    <label for="pcd">PCD:<span class="text-danger">*</span></label>
                    <input type="radio" name="pcd" id="pcd" value="1">Sim
                    <input type="radio" name="pcd" id="pcd" value="0">Não
                </div>
                <div class="form-group float-right">
                    <a class="btn btn-secondary" href="../home/admin/">Voltar</a>
                    <input class="btn btn-success rounded" type="submit" value="Enviar">
                </div>
            </div>
        </form>

    </div>


    </form>
</div>
</div>
</body>
</html>
