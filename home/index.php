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
</head>
<body class="bg-light">
<!--Cabeçalho com menu de navegação-->
<header class="card-header bg-white fixed-top p-2 mb-5">


    <div class="mx-auto">
        <ul class="nav mx-auto">
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
        </ul>
    </div>


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