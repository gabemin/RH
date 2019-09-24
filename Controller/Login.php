<?php
include 'Connect.php';
include '../Model/Modal.php';

session_start();
session_destroy();

$mostraModal = '';



//verifica se foi informado um email na area de login.
if (isset($_POST['login'])) {

    //verifica se o campo de email foi preenchido
    if ($_POST['login'] != '') {

        //chama a conexao com o banco.
        $db = new Connect();

        //verifica se o campo de senha foi preenchido
        if ($_POST['pwd'] != '') {

            //busca no banco uma entrada com as informações passadas.
            $sql = "SELECT senha FROM usuario WHERE EMAIL= ?";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(1, $_POST['login']);

            $stmt->execute();

            //busca a senha no banco de dados
            $fetch = $stmt->fetch(PDO::FETCH_ASSOC)['senha'];
            $fetchmail = $stmt->fetch(PDO::FETCH_ASSOC['email']);

            //verifica se a senha existe no banco de dados.
            if ($fetchmail !== NULL) {

                //verifica se a senha inserida é igual a do banco de dados.
                if ($fetch == $_POST['pwd']) {

                    //busca no banco o tipo de usuario
                    $sql = 'SELECT verificado FROM usuario WHERE EMAIL = ?';
                    $stmt = $db->prepare($sql);
                    $stmt->bindParam(1, $_POST['login']);
                    $stmt->execute();
                    $verificado = $stmt->fetch(PDO::FETCH_ASSOC)['verificado'];

                    session_start();
                    $_SESSION['usuario'] = $_POST['login'];

                    //se o tipo de usuario for 0,é candidato, então vai pra home do candidato,
                    // se não, vai pra home de Administrador.


                    if ($verificado == 0) {
                        header('location: ../home/nao_verificado/');
                    } else {
                        $sql = 'SELECT tipo_usuario FROM usuario WHERE EMAIL = ?';
                        $stmt = $db->prepare($sql);
                        $stmt->bindParam(1, $_POST['login']);
                        $stmt->execute();
                        $tipoUsuario = $stmt->fetch(PDO::FETCH_ASSOC)['tipo_usuario'];
                        if ($tipoUsuario == 0) {
                            header('location: ../home/index.php');
                        } else {
                            header('location: ../home/admin/index.php');
                        }
                    }

                    //Senha Incorreta
                } else {
                    $mostraModal = Modal::show('Falha no Login', 'Senha incorreta, tente novamente.');
                }
                //email não cadastrado
            } else {
                $mostraModal = Modal::show('Falha no Login', 'Email não cadastrado. Realize o dados_de_acesso.');
            }
            //Campo de senha não preenchido
        } else {
            $mostraModal = Modal::show('Falha no Login', 'Por favor, insira uma Senha.');
        }

        // campo de email não preenchido
    } else {
        $mostraModal = Modal::show('Falha no Login', 'Por favor, insira um email.');
    }
}
unset($_POST['login']);
unset($_POST['pwd']);
