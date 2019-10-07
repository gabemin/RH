<?php
include 'rh/Controller/Connect.php';

class Inscricao
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();
    }

    function novaInscricao($id_pessoa, $id_vaga, $candidato, $telefone)
    {

        $sql = 'INSERT INTO inscricao(id_pessoa, id_vaga, candidato, telefone) VALUES(?,?,?,?)';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();

    }

    function listAll(){
        $sql = "SELECT * FROM inscricao";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}