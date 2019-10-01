<?php

use PHPMailer\PHPMailer\PHPMailer;

include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/SMTP.php';
include 'PHPMailer/src/POP3.php';
include 'PHPMailer/src/Exception.php';
include 'PHPMailer/src/OAuth.php';
include 'acesso.php';
include '../../DAO/User.php';

$user = new User();


session_start();
$id = $_SESSION['id'];

$mail = new PHPMailer();
$mail->isSMTP();
$mail->SMTPOptions = array(
    'ssl' => array(
        'verify_peer' => false,
        'verify_peer_name' => false,
        'allow_self_signed' => true
    )
);
$mail->Host = 'smtp.hospitalauxiliadora.com.br';
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'tls';
$mail->Username = $acesso_email;
$mail->Password = $acesso_senha;
$mail->Port = 587;
$mail->setFrom('teste@teste.com', 'HNSA - Recursos Humanos');
$mail->addAddress($_SESSION['email']);

$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->Subject = 'Confirmação de Cadstro';
$mail->Body = "Clique no link abaixo para confirmar seu cadastro<br>http://localhost/rh/Controller/verificacao.php?id=$id";


if (!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}
