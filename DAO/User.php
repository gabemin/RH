<?php

include_once '../trilha.php';
include_once $trilha.'Controller/Connect.php';


class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();
        $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    function create($nome, $email, $senha)
    {

        try {
            $sql = 'SELECT email FROM pessoa WHERE email = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$email]);
            if ($stmt->fetch() === FALSE) {
                $sql = 'INSERT INTO pessoa(nome, email, senha, dt_criacao, dt_atualizacao) VALUES(?,?,?,?,?) ';
                $stmt = $this->conn->prepare($sql);
                return $stmt->execute([$nome, $email, $senha, date('Y-m-d H:i:s.u'), date('Y-m-d H:i:s.u')]);
            } else {
                return FALSE;
            }
        } catch (PDOException $e) {
            echo $e;
        }
    }
    function insert($nascimento, $telefone, $celular, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, $id)
    {
        try {

            $sql = 'SELECT count(*) FROM pessoa WHERE id = ?';
            $stmt = $this->conn->prepare($sql);
            $stmt->execute([$id]);
            $return = $stmt->fetch();
            var_dump($return);
            if ($return[0] != 0) {
                $sql = "UPDATE PESSOA SET dt_nascimento=?, telefone=?, celular=?, cep=?, rua=?, numero=?, bairro=?, complemento=?, cidade=?, estado=?, dt_atualizacao=? WHERE id = ?";

                $stmt = $this->conn->prepare($sql);

                $stmt->execute([$nascimento, $telefone, $celular, $cep, $rua, $numero, $bairro, $complemento, $cidade, $estado, date('Y-m-d H:i:s.u'), $id]);
            }

        } catch (SQLException $e) {
            echo $e;
            $this->modal('Falha no Acesso',
                'Não foi possível conectar ao banco de dados. Tente novamente mais tarde.');
        }

    }

    function modal($modalTitle, $modalBody)
    {

        return "<div class='modal' tabindex='-1' role='dialog'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>$modalTitle</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>$modalBody</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>OK</button>
            </div>
        </div>
    </div>
</div>";
    }

    function update($id, $nome, $nascimento, $email, $senha, $endereco, $numero, $complemento, $cidade, $uf)
    {

        $sql = 'UPDATE PESSOA SET nome = ?, dt_nascimento = ?, dt_atualizacao = ?, email = ?, rua = ?, numero = ?' .
            ', complemento = ?, cidade = ?, estado = ? WHERE id = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$nome, $nascimento, date('Y-m-d H:i:s.u'), $email, $senha, $endereco,
            $numero, $complemento, $cidade, $uf, $id]);
    }

    function list($id)
    {
        //se não for passado um id como parametro, busca todos.
        if (isset($id)) {
            $sql = ' SELECT * FROM pessoa WHERE id = ?';
        } else {
            $sql = 'SELECT * FROM pessoa;';
        }
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$id]);
        return $stmt->fetchAll();
    }

    function delete($id)
    {
        $sql = 'DELETE from PESSOA where id = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($id);
    }

    /**
     * @return Connect
     */
    public function getConn(): Connect
    {
        return $this->conn;
    }


}