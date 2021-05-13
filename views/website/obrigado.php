<?php

/**
 * This is the thank you layout. All content placed here we'll be displayed when the user
 * calls '/obrigado' at browser or after click at Subscribe button. Since we have a backend 
 * framework it's not needed to import every php file to build header and footer. 
 * Our backend already do this.
 */

if (isset($_ENV['WHATSAPP_URL'])) {
    $waUrl = $_ENV['WHATSAPP_URL'];
} else {
    $waUrl = 'https://chat.whatsapp.com/CHcqmTOoRML1YYs5TZbhEi';
}

?>


<section id="background-1">
    <div id="thanks__title">
        <h1>Quase tudo certo com sua inscrição</h1>
        <p>
            Nós também te enviamos um e-mail.
            <br>Você pode confirmar sua participação dentro dele.
        </p>
    </div>

    <div id="section__social_network">
        <a href="https://t.me/ordenesjosem" class="social_network_card" target="_blank" rel="nofollow norel">
            <div>
                <img src="/assets/images/social_icons/telegram-plane.svg" alt="Ícone de rede social - Telegram" />
                Faça parte do nosso canal no Telegram
            </div>
        </a>

        <a href="<?php echo $waUrl; ?>" class="social_network_card" target="_blank" rel="nofollow norel">
            <div>
                <img src="/assets/images/social_icons/whatsapp.svg" alt="Ícone de rede social - WhatsApp" />
                Participe do nosso grupo de WhatsApp
            </div>
        </a>
    </div>
</section>