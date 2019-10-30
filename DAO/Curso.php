<?php
include_once "../../../Controller/Connect.php";

$conn;

class Curso
{
    public function __construct()
    {
        $this->conn = new Connect();
        $this->conn->setAttribute(PDO::ERRMODE_EXCEPTION, PDO::ATTR_ERRMODE);
    }

    function create($idUser, $instituicao, $tipoCurso, $nomeCurso, $inicio, $termino) {
        try{
            $sql = 'INSERT INTO cursos(id_pessoa, instituicao_ensino, tipo_curso, nome_curso'.
                ',dt_inicio, dt_fim, dt_atualizacao) VALUES(?,?,?,?,?,?,?)';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$idUser, $instituicao, $tipoCurso, $nomeCurso, $inicio, $termino, date('Y-m-d H:i:s:u')]);

    }catch (SQLError $e){
            echo $e;
        }
    }

    function read($idUser) {
        $sql = 'SELECT * FROM cursos WHERE id_pessoa = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idUser]);

        return $stmt->fetchAll();
    }

    function update($idCurso, $instituicao, $tipoCurso, $nomeCurso, $inicio, $termino) {
        $sql = 'UPDATE cursos SET instituicao_ensino=?, tipo_curso=?, nome_curso=?,'
                  .'dt_inicio=?, dt_fim=?, dt_atualizacao=? WHERE id=?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$instituicao, $tipoCurso, $nomeCurso, $inicio, $termino, date('Y-m-d H:i:s:u'), $idCurso]);
    }

    function delete($idCurso) {
        $sql = 'DELETE * FROM cursos WHERE id = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$idCurso]);

    }
}

