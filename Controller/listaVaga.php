<?php

include '../DAO/Vaga.php';

$vaga = new Vaga();

$result = $vaga->list();

if ($result === false) {
    echo "Erro: Não foi possivel contactar o banco de dados.";
}
else {
    //if (mysqli_num_rows($result) > 0) {
        echo "<table>";
            echo "<tr>";
                echo "<th>Título</th>";
                echo "<th>Vagas</th>";
                echo "<th>PCD</th>";
            echo "<tr>";
        while ($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['titulo'] . "</td>";
                echo "<td>" . $row['quantidade'] . "</td>";
                echo "<td>" . $row['pcd'] . "</td>";
            echo "</tr>";
        }
        echo "<table>";
        //mysqli_free_result($result);
   // }
//    else {
//        echo 'Não há vagas para serem exibidas.';
//    }
}
