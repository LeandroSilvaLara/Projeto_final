    <form id="contactForm" name="sentMessage" novalidate="novalidate">
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Nome</label>
                <input class="form-control" id="name" type="text" placeholder="Nome" required="required"
                    data-validation-required-message="Please enter your name." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Endereço de Emaill</label>
                <input class="form-control" id="email" type="email" placeholder="Endereço de email" required="required"
                    data-validation-required-message="Please enter your email address." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Número para contato</label>
                <input class="form-control" id="phone" type="tel" placeholder="Número para contato" required="required"
                    data-validation-required-message="Please enter your phone number." />
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <div class="control-group">
            <div class="form-group floating-label-form-group controls mb-0 pb-2">
                <label>Mensagem</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Mensagem" required="required"
                    data-validation-required-message="Please enter a message."></textarea>
                <p class="help-block text-danger"></p>
            </div>
        </div>
        <br />
        <div id="success"></div>
        <div class="form-group"><button class="btn btn-primary btn-xl" id="sendMessageButton"
                type="submit">Enviar</button>
        </div>
    </form>