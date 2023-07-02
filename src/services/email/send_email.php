<?php

if (isset($_POST['email']) && !empty($_POST['email'])) {


    $nome = addslashes($_POST['name']);
    $email = addslashes($_POST['email']);
    $assunto = addslashes($_POST['subject']);
    $mensagem = addslashes($_POST['message']);

    $to = "maisgeoamb@gmail.com";
    $subject = "maisgeoamb.com.br - " . $assunto;
    $body = "Nome: " . $nome . "\n" .
        "E-mail: " . $email . "\n" .
        "Mensagem: " . $mensagem;
    $header = "From:contato@maisgeoamb.com.br" . "\r\n" .
        "Reply-To: " . $email . "\r\n" .
        "X=Mailer:PHP/" . phpversion();
    if (mail($to, $subject, $body, $header)) {
?>
        <!--show an error message if user email is not valid-->
        <div class="error-message">Contato enviado com sucesso!</div>

    <?php
    } else {
    ?>
        <!--show an error message if user email is not valid-->
        <div class="error-message"><?php echo $userEmail ?>, o e-mail não pode ser enviado!</div>

<?php
        echo ("O e-mail não pode ser enviado!");
    }
}

?>