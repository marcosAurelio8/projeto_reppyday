<section class="content cont_pad1" style="background-color: #FBFBFB;">
    <div class="container"><div class="ic"></div>
        <div class="row">
            <div class="grid_12">
                <div class="map">
                    <figure>
                       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3950.9218473028054!2d-36.0612231803628!3d-8.006996519533878!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x7a979ae4587c7e1%3A0x6624d2e08f6b69c2!2sToritama%2C+PE!5e0!3m2!1spt-BR!2sbr!4v1417736666528" width="600" height="450" frameborder="0" style="border:0"></iframe>
                    </figure>
                </div>
            </div>
            <div class="clear"></div>
            <div class="grid_5">
                <h2 >Informações</h2>
                <div style="font-size: 1.1em; color: #000; text-transform: uppercase; text-align: justify;">
                    Rappy Day . <br><br>
                    Parque das feiras, 55125000 Toritama - Pernambuco,<br>
                    Brasil, CEP: 000000000.<br>
                    Telefone: +55 81 99814616<br>
                    FAX: +55 81 000 000<br>
                    E-mail: <a href="#">admin@reppyday.com</a>
                </div>
            </div>
            <div class="grid_6 preffix_1">
                <h2>Contato</h2>
                <form id="form">
                    <div class="success_wrapper">
                        <div class="success-message">Contato enviado com sucesso!!</div>
                    </div>
                    <label class="name">
                        <input type="text" placeholder="Nome:" data-constraints="@Required @JustLetters" />
                        <span class="empty-message">*Informe o nome.</span>
                        <span class="error-message">*Informe um nome válido.</span>
                    </label>
                    <label class="email">
                        <input type="text" placeholder="E-mail:" data-constraints="@Required @Email" />
                        <span class="empty-message">*Infome o e-mail.</span>
                        <span class="error-message">*Informe um email válido.</span>
                    </label>
                    <label class="phone">
                        <input type="text" placeholder="Fone:" data-constraints="@Required @JustNumbers"/>
                        <span class="empty-message">*Informe um telefone.</span>
                        <span class="error-message">*Informe um telefone válido.</span>
                    </label>
                    <label class="message">
                        <textarea placeholder="Messagem:" data-constraints='@Required @Length(min=20,max=999999)'></textarea>
                        <span class="empty-message">*Informe a mensagem.</span>
                        <span class="error-message">*Informe a mensagem, com pelo menos 20 caracteres.</span>
                    </label>
                    <div>
                        <div class="clear"></div>
                        <div class="btns">
                            <a href="#" data-type="reset" class="btn bt__2">Limpar</a>
                            <a href="#" data-type="submit" class="btn bt__2">Enviar</a>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
