<?php
include 'Connect.php';
include '../Model/Modal.php';

session_start();
session_destroy();

$mostraModal = '';
$verificado = 0;
$tipoUsuario = 0;
$userId = 0;

//verifica se foi informado um email na area de login.
if (isset($_POST['login'])) {
    //verifica se o campo de email foi preenchido
    if ($_POST['login'] != '') {
        //chama a conexao com o banco.
        $db = new Connect();


        //verifica se o campo de senha foi preenchido
        if ($_POST['pwd'] != '') {
            //busca no banco uma entrada com as informações passadas.
            $sql = "SELECT id, senha, verificado, tipo_usuario FROM pessoa WHERE EMAIL= ?";
            $stmt = $db->prepare($sql);
            $stmt->execute([$_POST['login']]);
            $resultSet = $stmt->fetchAll();

            //armazena os campos buscados no SQL acima.
            foreach ($resultSet as $item) {
                $userId = $item['id'];
                $senha = $item['senha'];
                $verificado = $item['verificado'];
                $tipoUsuario = $item['tipo_usuario'];
            }

            //busca o Email no banco de dados
            $fetchmail = $stmt->fetch(PDO::FETCH_ASSOC['email']);

            //verifica se o Email existe no banco de dados.
            if ($fetchmail !== NULL) {

                //verifica se a senha inserida é igual a do banco de dados.
                if ($senha == $_POST['pwd']) {

                    session_start();
                    $_SESSION['usuario'] = $_POST['login'];
                    $_SESSION['id'] = $userId;

                    //se o cadastro não for verificado, mostra a mensagem.
                    if ($verificado == 0) {
                        header('location: ../home/nao_verificado/');
                        //se o tipo de usuario for 0,é candidato, então vai pra home do candidato,
                        // se não, vai pra home de Administrador.
                    } else {
                        if ($tipoUsuario == 0) {
                            header('location: ../home/index.php');
                        } else {
                            header('location: ../home/admin/index.php');
                        }
                    }
                    //Senha Incorreta
                } else {
                    $mostraModal = Modal::show('Falha no Login', 'Por favor, verifique seu email e senha.');
                }
                //email não cadastrado
            } else {
                $mostraModal = Modal::show('Falha no Login', 'Por favor, verifique seu email e senha.');
            }
            //Campo de senha não preenchido
        } else {
            $mostraModal = Modal::show('Falha no Login', 'Por favor, verifique seu email e senha.');
        }
        // campo de email não preenchido
    } else {
        $mostraModal = Modal::show('Falha no Login', 'Por favor, verifique seu email e senha. ');
    }
}
unset($_POST['login']);
unset($_POST['pwd']);
