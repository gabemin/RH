<?php

use PHPMailer\PHPMailer\PHPMailer;

include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/SMTP.php';
include 'PHPMailer/src/POP3.php';
include 'PHPMailer/src/Exception.php';
include 'PHPMailer/src/OAuth.php';
include 'acesso.php';

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
$mail->setFrom($acesso_email, 'HNSA - Recursos Humanos');
$mail->addAddress($_POST['email']);

$mail->isHTML(true);
$mail->SMTPDebug = 0;
$mail->Subject = 'Envio automático de confirmação de E-Mail';
$mail->Body    = '<meta charset="utf-8"> Se vc Recebeu essa mensagem da um grito!';

if(!$mail->send()) {
    echo 'Não foi possível enviar a mensagem.<br>';
    echo 'Erro: ' . $mail->ErrorInfo;
} else {
    echo 'Mensagem enviada.';
}
