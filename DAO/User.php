<?php

include('../src/Controller/Connect.php');


class User
{
    private $conn;
    public function __construct()
    {
        $this->conn = new Connect();

    }

    function insert($nome, $nascimento, $email, $senha, $endereco, $numero, $complemento, $cidade, $uf){

        $sql = 'INSERT INTO PESSOA(nome, dt_nascimento, email, senha, endereco, endereco_num, endereco_compl, cidade, uf)'.
            'VALUES(?,?,?,?,?,?,?,?,?)';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$nome, $nascimento, $email, $senha, $endereco, $numero, $complemento, $cidade, $uf]);
    }
    function update($id, $nome, $nascimento, $email, $senha, $endereco, $numero, $complemento, $cidade, $uf){

        $sql = 'UPDATE PESSOA SET nome = ?, dt_nascimento = ?, dt_atualizacao = ?, email = ?, endereco = ?, endereco_num = ?'.
        ', endereco_compl = ?, cidade = ?, uf = ? WHERE id_pessoa = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$nome, $nascimento, date('Y-m-d H:i:s.u'), $email, $senha, $endereco,
            $numero, $complemento, $cidade, $uf, $id]);
    }
    function delete($id){
        $sql = 'DELETE from PESSOA where id_pessoa = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($id);
    }
    function list(){
        //TODO
    }
}