<?php
include '../Controller/detalheVaga.php';
session_start();
echo $_SESSION['usuario'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>
<div class="container">
    <div class="form-row float-right">
        <button class="btn btn-secondary rounded p-1 mr-1">Voltar</button>
        <button class="btn btn-success rounded p-1 ml-1 ">Candidatar</button>
    </div>
</div>
</body>
</html>
