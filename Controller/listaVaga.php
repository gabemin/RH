<?php

include '../DAO/Vaga.php';

$vaga = new Vaga();

$result = $vaga->list();
//var_dump($result);

if (count($result) > 0) {
    echo "
    <div class='container p-5 mt-4'>
          <table class='table table-bordered table-striped'>
          
          <thead>
          <tr>
          <th>Titulo</th>
          <th>Vagas</th>
          <th>PCD</th>
          <th>Data Limite</th>
          <th>Visualizar</th>
          </tr>
          </thead>
          <tbody>";
    foreach ($result as $row) {
        $id = $row['id'];
        echo "<tr>
        <td>" . $row['titulo'] . "</td>
        <td>" . $row['quantidade'] . "</td>";
        if ($row['pcd'] == 1) {
            echo "<td>✅</td>";
        } else {
            echo "<td>❌</td>";
        }
        echo "<td>" . date("d-m-Y", strtotime($row['dt_limite'])) . "</td>";
        echo "<td> <a href='../vaga/index.php?id=$id'.>Ver</a></td>";
        echo "</tr>";

    }
    echo "</tbody>
</table>
</div>";

} else {

}
