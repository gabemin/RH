<?php
session_start();
if (isset($_SESSION['usuario'])) {

} else {
    header('location: ../../login/');
}
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
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
</head>
<body>
<header class="card-header bg-white p-2 mb-5">


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
<div class="container bg-light">
    <div class="p-3">
        <h2>Últimas Inscrições</h2>
        <hr>
    </div>
    <table class="table table-bordered table-striped tab">
        <thead>
        <tr>
            <th>Nome</th>
            <th>Vaga</th>
            <th>Data</th>
            <th>Visualizar Curriculo</th>
        </tr>
        </thead>
        <tbody>
        <tr>
            <td>Fulano de tal</td>
            <td>Vaga 2</td>
            <td>13/09/2019</td>
            <td><a href="#">Ver</a></td>
        </tr>
        <tr>
            <td>Siclano de tal</td>
            <td>Vaga VAGA VAGA</td>
            <td>22/12/2019</td>
            <td><a href="#">Ver</a></td>
        </tr>
        <tr>
            <td>Beltrano de tal</td>
            <td>Vaga</td>
            <td>01/01/2019</td>
            <td><a href="#">Ver</a></td>
        </tr>
        </tbody>
    </table>
    <div class="row px-0 pt-3">
        <div class="col-md-6 m-0 p-0 d-flex justify-content-center">
            <button class="btn btn-info" style="width:300px;  height: 100px;font-size: 24px">Ver todas as Inscrições</button>
        </div>
        <div class="col-md-6 m-0 p-0 d-flex justify-content-center">
            <a href="../../cadastro_vaga/">
                <button  class="btn btn-danger " style="width:300px;  height: 100px;font-size: 24px">Cadastrar nova vaga</button></a>
        </div>
    </div>


</div>

</body>
</html>
