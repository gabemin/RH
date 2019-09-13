<?php

include'../../Controller/Connect.php';


class User
{
    private $conn;

    public function __construct()
    {
        $this->conn = new Connect();

    }

    function create($email, $senha){

        $sql = 'SELECT email FROM usuario WHERE email = ?';
        $stmt = $this->conn->prepare($sql);
        $stmt->execute([$email]);
        if($stmt->fetch() === FALSE) {
            echo $this->modal('aaa', 'entrou no insert');
            $sql = 'INSERT INTO USUARIO(email, senha, dt_criacao, dt_atualizacao) VALUES(?,?,?,?) ';
            $stmt = $this->conn->prepare($sql);
            return $stmt->execute([$email, $senha, date('Y-m-d H:i:s.u'), date('Y-m-d H:i:s.u')]);
        }
        else{
            return FALSE;
        }

    }

    function insert($nome, $nascimento, $telefone, $celular, $email, $cep, $rua, $numero, $bairro, $cidade, $estado)
    {

        try {

            $sql = 'SELECT email FROM pessoa WHERE email = ?';
            $stmt = $this->conn->prepare($sql);

            if(!$stmt->execute([$email])){
                $sql = 'INSERT INTO PESSOA(nome, dt_nascimento endereco, endereco_num, endereco_compl,cidade, uf, dt_criacao, dt_atualizacao,) VALUES (?,?,?,?,?,?,?,?,?,?,?)';

                $stmt = $this->conn->prepare($sql);

                $stmt->execute([$nome, $nascimento, $telefone, $celular, date('Y-m-d H:i:s.u'), date('Y-m-d H:i:s.u'),
                    $email, $cep, $rua, $numero, $bairro, $cidade, $estado]);

            }

        } catch (Exception $e) {
            return $this->modal('Falha no Acesso',
                'Não foi possível conectar ao banco de dados. Tente novamente mais tarde.');
        }

    }

    function update($id, $nome, $nascimento, $email, $senha, $endereco, $numero, $complemento, $cidade, $uf)
    {

        $sql = 'UPDATE PESSOA SET nome = ?, dt_nascimento = ?, dt_atualizacao = ?, email = ?, endereco = ?, endereco_num = ?' .
            ', endereco_compl = ?, cidade = ?, uf = ? WHERE id_pessoa = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute([$nome, $nascimento, date('Y-m-d H:i:s.u'), $email, $senha, $endereco,
            $numero, $complemento, $cidade, $uf, $id]);
    }

    function delete($id)
    {
        $sql = 'DELETE from PESSOA where id_pessoa = ?';

        $stmt = $this->conn->prepare($sql);

        $stmt->execute($id);
    }

    function list()
    {
        //TODO
    }

    function modal($modalTitle, $modalBody){

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
}