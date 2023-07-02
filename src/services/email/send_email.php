<?php
$error = false;

if (isset($_POST['email']) && !empty($_POST['email'])) {

    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['subject']);
    $mensagem = addslashes($_POST['message']);

    $phpVersion = phpversion();
    $from = Email::From->value;

    $to = Email::To->value;
    $subject = Email::Subject->value . "{$assunto}";
    $body = "Nome: {$nome}\n
             E-mail: {$email}\n
             Mensagem: {$mensagem}";
    $header = " From:{$from}\r\n
                Reply-To: {$email}\r\n
                X=Mailer:PHP/{$phpVersion}";

    $error = mail($to, $subject, $body, $header);
}
