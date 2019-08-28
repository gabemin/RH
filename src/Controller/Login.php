<?php
include 'Connect.php';
$senhaIncorreta = '';

if (isset($_POST['login'])) {

    $db = new Connect();
    $sql = "SELECT senha FROM PESSOA WHERE EMAIL= ?";
    $stmt = $db->prepare($sql);

    $stmt->bindParam(1, $_POST['login']);

    $stmt->execute();

    $fetch = $stmt->fetch(PDO::FETCH_ASSOC)['senha'];
    if ($fetch !== NULL && $_POST['pwd']!="") {
        if ($fetch == $_POST['pwd']) {
            echo 'login';
            echo $_POST['pwd'];
        } else {
            $senhaIncorreta = "<div class='modal' tabindex='-1' role='dialog'>
    <div class='modal-dialog' role='document'>
        <div class='modal-content'>
            <div class='modal-header'>
                <h5 class='modal-title'>Erro de Login</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>Senha incorreta.</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                <button type='button' class='btn btn-primary'>Esqueceu a senha?</button>
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
                <h5 class='modal-title'>Erro de Login</h5>
                <button type='button' class='close' data-dismiss='modal' aria-label='Fechar'>
                    <span aria-hidden='true'>&times;</span>
                </button>
            </div>
            <div class='modal-body'>
                <p>Por favor, insira sua senha.</p>
            </div>
            <div class='modal-footer'>
                <button type='button' class='btn btn-secondary' data-dismiss='modal'>Fechar</button>
                <button type='button' class='btn btn-primary'>Esqueceu a senha?</button>
            </div>
        </div>
    </div>
</div>";
    }
    unset($_POST['login']);
    unset($_POST['pwd']);
}





//TODO: verificação de login.