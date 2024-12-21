<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<?php
// ini_set("display_errors",1);
error_reporting(E_ALL);
require_once("config/config.php");

require_once('assets/mail/PHPMailer.php');
require_once('assets/mail/SMTP.php');
require_once('assets/mail/Exception.php');

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;


$mail = new PHPMailer(true);

try {
    //Configuracao do Servidor de envio de email
    $mail->SMTPDebug = SMTP::DEBUG_SERVER;
    $mail->isSMTP();
    $mail->Host = 'tls://smtp.gmail.com';
    $mail->SMTPAuth = true;
    $mail->Username = 'testescasimiro@gmail.com';
    $mail->Password = "valdimiro123";
    $mail->Port = 587;

    //Definindo quem envia, quem recebe e o corpo da mensagem
    $mail->setFrom('testescasimiro@gmail.com');

    $mail->addAddress('geralnegociosvc@gmail.com'); //Aqui posso adicionar mais destinaatarios com a mesma funcao

    $mail->isHTML(true);

    $mail->Subject = "Teste de envio de mensagens com php";
    $mail->Body = "Esta e uma mensagem do <strong>Luokaliye Tech</strong>";
    $mail->AltBody = "Esta e uma mensagem do Luokaliye Tech";
    if ($mail->send()) {
        echo "Email enviado com sucesso";
        // echo "<script> Swal.fire({
        //         title: 'Resultado',
        //         text: 'Email enviado com sucesso, confira sua caixa de entrada',
        //         icon: 'success',
        //         confirmButtonText: 'Ok'
        //     });</script>";
    }else{
        // echo "<script> Swal.fire({
        //     title: 'Resultado',
        //     text: 'Falha no envio do email',
        //     icon: 'error',
        //     confirmButtonText: 'Ok'
        // });</script>";
        echo "Falha no envio do email";
    }
} catch (Exception $erro) {
    echo "Erro: ". $mail->ErrorInfo;
}
