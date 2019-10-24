<?php
include '../Controller/detalheVaga.php';
//include '../Controller/novaInscricao.php';
$_SESSION['idVaga'] = $_GET['id'];
?>
<html>
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

   <a class="btn btn-success col-md-6 mx-auto" href="../Controller/novaInscricao.php">Candidatar</a>


<!--        <button class="btn btn-secondary rounded p-2 mr-1">Voltar</button>-->


</body>
</html>
