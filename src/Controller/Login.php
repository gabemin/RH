<?php
include 'Connect.php';
$senhaIncorreta = '';
if (isset($_POST['login'])) {

    $db = new Connect();

    $sql = "SELECT senha FROM usuario WHERE EMAIL= ?";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(1, $_POST['login']);

    $stmt->execute();

    $fetch = $stmt->fetch(PDO::FETCH_ASSOC)['senha'];

    if ($fetch !== NULL && $_POST['pwd']!="") {
        if ($fetch == $_POST['pwd']) {
            echo 'aaaaaaaaaaeeeeeeeeeeee';
            header('location: View/Home.php');
        } else {
            $senhaIncorreta = "<div class='modal' tabindex='-1' role='dialog'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title text-danger' >Erro de Login</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>Senha incorreta.</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                <button type='button' class='btn btn-primary' style='background-color: #1e7e34'>Esqueceu a senha?</button>
            </div>
        </div>
    </div>
</div>";
        }
    } else {
        $senhaIncorreta = "<div class='modal' tabindex='-1' role='dialog'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title' style='font-size: 24px';>Erro de Login</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body text-secondary'>
                <p style='font-size: 20px'>Por favor, insira sua senha.</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-danger ' data-dismiss='modal'>Fechar</button>
                <button type='button' class='btn btn-primary' style='background-color: #1e7e34'>Esqueceu a senha?</button>
            </div>
        </div>
    </div>
</div>";
    }
    unset($_POST['login']);
    unset($_POST['pwd']);
}
