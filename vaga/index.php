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

    <button  class="btn btn-success col-md-6">Candidatar</button>


<!--        <button class="btn btn-secondary rounded p-2 mr-1">Voltar</button>-->


</body>
</html>
