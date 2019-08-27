<?php
    include 'Connect.php';

    $db = new Connect();
    $sql =  'SELECT * FROM PESSOA WHERE EMAIL= ?';
    $stmt = $db->prepare($sql);

    echo $_POST['login'];

    $stmt->bindParam(1, $_POST['login']);


    //TODO: verificação de login.

    //$result = $stmt->fetch(PDO::FETCH_BOTH);

   // echo $result;