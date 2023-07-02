<form action="index.php" method="post" class="php-email-form">
    <div class="row">
        <div class="col-12">
            <input type="text" name="name" class="form-control" id="name" placeholder="Seu Nome" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="email" class="form-control" name="email" id="email" placeholder="Seu Email" required>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <input type="text" class="form-control" name="subject" id="subject" placeholder="Assunto" required>
        </div>
    </div>
    <div>
        <div class="row">
            <div class="col-12">
                <textarea class="form-control" name="message" rows="5" placeholder="Mensagem" required></textarea>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-12">
            <div class="loading">Carregando</div>
            <div class="error-message">Erro detectado!</div>
            <div class="sent-message">Sua mensagem foi enviada com sucesso. Obrigado pelo contato!</div>
        </div>
    </div>
    <div class="row">
        <div class="text-center"><button type="submit">Enviar Mensagem</button></div>
    </div>
</form>