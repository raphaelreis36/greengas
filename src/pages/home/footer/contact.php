<?php include_once BASE_PATH . '/src/services/email/send_email.php'; ?>

<form action="/" method="post">     
    <div>
        <input type="text" name="name" id="name" placeholder="Seu Nome" required />
        <input type="email" name="email" id="email" placeholder="Seu Email" style="margin-top: 10px;" required />
        <input type="text" name="subject" id="subject" placeholder="Assunto" style="margin-top: 10px;" required />
        <textarea name="message" rows="5" placeholder="Mensagem" style="margin-top: 10px;" required></textarea>
    </div>
    
    <?php if(isset($_POST['name'])): ?>
        <?php if(!$error): ?>
            <div class="row">
                <div class="col-12" style="margin-top: 5px;">
                    <div class="sent-message"><?php echo Email::SuccessMessage->value; ?></div>
                </div>
            </div>
        <?php else: ?>
            <div class="row">
                <div class="col-12" style="margin-top: 5px;">                
                    <div class="error-message"><?php echo Email::ErrorMessage->value; ?></div>
                </div>
            </div>
        <?php endif; ?>
    <?php endif; ?>

    <div class="row">
        <div class="text-center" style="margin-top: 20px;">
            <button type="submit">Enviar Mensagem</button>
        </div>
    </div>
</form>