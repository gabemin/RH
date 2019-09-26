<?php

include'../Controller/Connect.php';


class Vaga
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();

    }

    function insert($titulo, $descricao, $beneficios, $requisitos, $dt_limite, $quantidade, $pcd)
    {
        echo 'Mandei comando sql<br>';
        $sql = 'INSERT INTO vagas(titulo, descricao, beneficios, requisitos, quantidade, dt_criacao, dt_limite, dt_atualizacao, pcd) VALUES (?,?,?,?,?,?,?,?,?)';
        echo 'Preparei comando sql<br>';
        $stmt = $this->conn->prepare($sql);

        try {
            echo 'Executei comando sql<br>';

            $stmt->execute([$titulo, $descricao, $beneficios, $requisitos, (int)$quantidade, date('Y-m-d H:i:s.u'), $dt_limite, date('Y-m-d H:i:s.u'), (int)$pcd]);
            var_dump($stmt->errorInfo());
        } catch (Exception $e) {
            echo $e;
            return false;
        }
    }

    function update($id, $descricao, $beneficios, $requisitos, $quantidade, $dt_limite, $pcd)
    {

        try {
            $sql = 'UPDATE vagas SET descricao=?,beneficios=?,requisitos=?,quantidade=?,dt_limite=?, pcd=? WHERE id=?';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute($descricao, $beneficios, $requisitos, $quantidade, $dt_limite, $pcd, $id);

        } catch (Exception $e) {
            echo $e;
        }
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