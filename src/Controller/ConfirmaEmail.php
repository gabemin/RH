<?php

use PHPMailer\PHPMailer\PHPMailer;

include 'PHPMailer/src/PHPMailer.php';
include 'PHPMailer/src/Exception.php';



//Instanciando a classe PHPMailer. O parâmetro TRUE ativa as exceções.
$mail = new PHPMailer(TRUE);

$email_usuario = $_POST['email'];
$nome_usuario = $_POST['nome'];

try{
    //Configurações do servidor.
    $mail->SMTPDebug = 2;                                             //ativa output de bebug verbal
    $mail->isSMTP();                                                  //Estabelece o uso de SMTP pelo mailer
    $mail->Host = 'smtp.hospitalauxiliadora.com.br';                  //Especifica o servidor smtp.
    $mail->SMTPAuth = true;                                           //Ativa a autenticação SMTP.
    $mail->Username = '';                                             //Usuario SMTP.
    $mail->Password = '';                                             //Senha SMTP.
    $mail->SMTPSecure ='ssl';                                         //Ativa criptografia SSL.
    $mail->Port = 587;                                                //Porta TCP para conexão.

    //Destinatarios
    $mail->setFrom('teste@teste.com.br');                     //Configura o email remetente.
    $mail->addAddress($email_usuario, $nome_usuario);                 //Configura o email e nome do destinatário.
    $mail->addReplyTo('info@example.com.br');                 //Configura o email de resposta.
    $mail->addCC('cc@example.com.br');                        //Configura o destinatario de copia.
    $mail->addBCC('bcc@example.com.br');                      //configura o destinatario de copia cega.

    //Conteúdo
    $mail->isHTML();                                                  //Configura o formato HTML para o e-mail.
    $mail->Subject = 'Validação de email';                            //Configura o Assunto.
    $mail->Body = 'aqui vai ter o link para a <b>validação</b>';      //Configura o corpo da mensagem HTML.
    $mail->AltBody = 'aqui vai ter o link para a validação';          //Configura o corpo da mensagem para usuários não-html

    //Envia o Email.
    $mail->send();
    echo 'Email foi enviado.';
}catch(Exception $e){
    echo "Mensagem não pôde ser enviada. Mailer Error: {$mail->ErrorInfo}";
}



