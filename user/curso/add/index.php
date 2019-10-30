<?php
session_start();
echo $_SESSION['id'];
include_once  "../../../Controller/novoCurso.php"
?>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">

    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
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

<div class="container col-md-8 bg-light">
    <form>
        <div class="form-group col-md-3 ">
            <label>Graduação</label>
            <select class="form-control" onclick="mostraCampo()" name="tipoCurso" id="tipoCurso">
                <option value="0">Ensino Médio</option>
                <option value="1">Ensino Superior</option>
                <option value="2">Outro</option>
            </select>
        </div>
        <button type="button" onclick="alert()"></button>
        <div id="divCurso" class="form-group col-md-8"  style="display: none">
            <label for="curso">Curso</label>
            <input class="form-control" type="text" id="curso" name="curso">
        </div>
        <script>
            function mostraCampo(){
                var x = document.getElementById("curso");
                var y = document.getElementById("tipoCurso");
                alert(y.val());
                if(y.val()=="2"){
                    x.style.display="block";
                }
            }
        </script>
        <div class="form-group col-md-8">
            <label>Instituição de Ensino</label>
            <input class="form-control" type="text" id="instituicao" name="instituicao">
        </div>
        <div class="form-row col-md-8">
            <div class="form-group col-md-3">
                <label>Início</label>
                <input class="form-control" type="text" id="inicio" name="inicio">
            </div>
            <div class="form-group col-md-3 mx-5">
                <label>Término</label>
                <input class="form-control" type="text" id="termino" name="termino">
            </div>
        </div>
        <div class="form-group float-right">
            <button class="btn btn-secondary">Voltar</button>
            <input class="btn btn-success" type="submit" value="Enviar">
        </div>
    </form>
</div>
</body>
</html>
