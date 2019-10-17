<?php
include_once("../Controller/Connect.php");

class Experiencia
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
}

function create($idPessoa, $empresa, $dataInicio, $dataFinal, $empregoAtual)
{
    $sql = "INSERT INTO experiencias(id_pessoa, empresa, dt_inicio, dt_fim, emprego_atual, dt_atualizacao)
                                                                                        VALUES(?,?,?,?,?,?)";
    $stmt = $sql->prepare($sql);
    $stmt->execute([$idPessoa, $empresa, $dataInicio, $dataFinal, $empregoAtual, date('Y-m-d H:i:s.u')]);
}

function update($empresa, $dataInicio, $dataFinal, $empregoAtual)
{
    $sql = "UPDATE experiencias SET empresa=?, dt_inicio=?, dt_fim=?, emprego_atual=?, dt_atualizacao=?";
    $stmt = $sql->prepare($sql);
    $stmt->execute([$empresa, $dataInicio, $dataFinal, date('Y-m-d H:i:s.u')]);
}

function delete($id)
{
    $sql = "DELETE * FROM experiencias WHERE id=?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$id]);
}

function read($id){
    $sql = "SELECT * FROM experiencias WHERE id_pessoa = ?";
    $stmt = $this->conn->prepare($sql);
    $stmt->execute([$id]);
    return $stmt->fetchAll();
}
