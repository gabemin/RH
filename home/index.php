<?php
session_start();
unset($_POST['login']);
unset($_POST['pwd']);
if (isset($_SESSION['usuario'])) {

} else {
    header('location: ../login/');
}
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
</head>
<body class="bg-light">


<!--Cabeçalho com menu de navegação-->
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


<!--Listagem das vagas-->

<div class="container pt-5 mt-5">
    <h1 class="text-danger">Bem Vindo!</h1>
</div>

<?php
include '../Controller/listaVaga.php';
?>
</body>
</html>