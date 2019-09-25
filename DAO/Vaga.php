<?php

include('../src/Controller/Connect.php');


class Vaga
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();

    }

    function insert($descricao, $beneficios, $requisitos, $quantidade, $dt_limite, $pcd)
    {
        $sql = 'INSERT INTO vagas values (descricao, beneficios, quantidade, dt_criacao, dt_limite, dt_atualizacao, pcd)';
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($descricao, $beneficios, $requisitos, $quantidade, $dt_limite, $pcd);
    }

    function update($id, $descricao, $beneficios, $requisitos, $quantidade, $dt_limite, $pcd)
    {
        $sql = 'UPDATE vagas SET descricao=?,beneficios=?,requisitos=?,quantidade=?,dt_limite=?, pcd=? WHERE id=?';
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute($descricao, $beneficios, $requisitos, $quantidade, $dt_limite, $pcd, $id);
    }

    function delete($id)
    {
        $sql = 'DELETE from vagas where id = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($id);
    }

    function list()
    {
        $sql = 'SELECT * FROM vagas';

        $stmt = $this->conn->prepare($sql);

        return $stmt->execute();
    }
}