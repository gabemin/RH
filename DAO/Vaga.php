<?php

include '../Controller/Connect.php';


class Vaga
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();

    }

    //Insere dados da vaga no banco, não importa se a vaga é repedita, o ID vai ser diferente.
    function insert($titulo, $descricao, $beneficios, $requisitos, $dt_limite, $quantidade, $pcd)
    {

        $sql = 'INSERT INTO vagas(titulo, descricao, beneficios, requisitos, quantidade, dt_criacao, dt_limite, dt_atualizacao, pcd) VALUES (?,?,?,?,?,?,?,?,?)';
        $stmt = $this->conn->prepare($sql);
        return $stmt->execute([$titulo, $descricao, $beneficios, $requisitos, (int)$quantidade, date('Y-m-d H:i:s.u'), $dt_limite, date('Y-m-d H:i:s.u'), (int)$pcd]);

    }

    //Atualiza os dados da vaga no banco, vai ser mais utilizado para mudar de ativo para inativo.
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

    //Deleta uma vaga do banco de dados
    function delete($id)
    {
        $sql = 'DELETE from vagas where id = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($id);
    }

    //Lista todas as vagas do banco de dados da mais nova para a mais antiga
    function list()
    {
        $sql = 'SELECT * FROM vagas WHERE situacao = 1 ORDER BY dt_criacao DESC';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute();

        return $stmt->fetchAll();

    }

    function detalhe($id){
        $sql = 'SELECT * FROM vagas WHERE situacao = 1 AND id = ? ORDER BY dt_criacao DESC';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$id]);

        return $stmt->fetchAll();
    }
}