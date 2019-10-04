<?php
include "../DAO/Inscricao.php";

$inscricao = new Inscricao();

$resultSet = $inscricao->listAll();

foreach ($resultSet as $item) {
    echo "<table class='table table-striped table-bordered'>
<thead>
<th></th>
<th></th>
<th></th>
<th></th>
</thead>
</table>";
}

