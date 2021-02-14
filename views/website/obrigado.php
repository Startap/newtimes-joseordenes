<?php 
/**
 * This is the thank you layout. All content placed here we'll be displayed when the user
 * calls '/obrigado' at browser or after click at Subscribe button. Since we have a backend 
 * framework it's not needed to import every php file to build header and footer. 
 * Our backend already do this.
 */
?>


<section id="background-1">
    <div id="header-bar">
        <img id="icon-1" src="assets/images/@icon__Broadcast.svg"  width="40px" height="40px" alt="" >
        <p id="description-icon-1">Aulas ao vivo</p>
    </div>
    
    <h1 id="title-1">Seja um FISIOTERAPEUTA expert</p>
    <h2 id="subtitle-1">
        Aprenda como se tornar um fisioterapeuta Expert e aumente seus clientes sendo mais efetivo, quebrando velhos paradigmas da fisioterapia.
    </h2>

    <p id="subtitle-2">
        Inscreva-se agora e seja avisado das melhores aulas para aprender algo
        muito além do básico, aumentar seus clientes na fisioterapia e ter sucesso 
        profissional!
    </p>

    <div id="box-agradecimento">
        <div class="box-header">
            <h2>Obrigado por se inscrever</h2>
        </div>
        <div class="box-conteudo">
            <div class="row-obrigado">
                <img src="/assets/images/Icon__Chat.svg" alt="">
                <p>Você recebeu um e-mail. Lá tem um link para as aulas ao vivo.</p>
            </div>
            <div class="row-obrigado">
                <img src="/assets/images/Icon__Email.svg" alt="">
                <p>Você também pode entrar para nosso canal do <b>Telegram</b> e ser avisado das novidades.</p>
            </div>
        </div>
    </div>

    <div class="button-telegram-container">
        <a href="https://t.me/joseordenes" id="btn-href" target="_blank">
        <span id="telegram-button">ENTRAR NO GRUPO</span>
</a>
    </div>
</section>
