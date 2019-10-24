<?php
include_once '../Controller/Connect.php';

class Inscricao
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function novaInscricao($id_pessoa, $id_vaga, $candidato, $telefone)
    {
        echo 'oi';
        try{
            $sql = 'INSERT INTO inscricao(id_pessoa, id_vaga, candidato, telefone) VALUES(?,?,?,?)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id_pessoa, $id_vaga, $candidato, $telefone]);
        } catch (PDOException $e){
            echo $e;
        }


    }

    function listAll(){
        $sql = "SELECT * FROM inscricao";
        $stmt = $this->conn->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}