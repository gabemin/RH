<?php
session_start();
$_SESSION['idVaga'] = $_GET['id'];
//include '../Controller/novaInscricao.php';

?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
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
<?php
include '../Controller/detalheVaga.php';

?>

<div class="container col-md-6">
    <a class="btn btn-secondary col-md-5 mx-auto float-left" href="../home/">Voltar</a>
    <a class="btn btn-success col-md-5 mx-auto float-right" href="../Controller/novaInscricao.php">Candidatar</a>
</div>


<!--        <button class="btn btn-secondary rounded p-2 mr-1">Voltar</button>-->


</body>
</html>
