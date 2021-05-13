<?php

/**
 * This is the homepage layout. All content placed here we'll be displayed when the user
 * calls '/' at browser. Since we have a backend framework it's not needed to import
 * every php file to build header and footer. Our backend already do this.
 */
?>

<!-- 
    This code renders our RD Station acquisition form. 
    All style should be changed according to the HTML and CSS generated here. 
-->
<section id="background-1">
    <div id="header-bar">
        <img id="icon-1" src="/assets/images/icon_broadcast.svg" width="40px" height="40px" alt="">
        <p id="description-icon-1">Aulas ao vivo</p>
    </div>

    <h1 id="title-1">SEMANA DO <br>FISIOTERAPEUTA EXPERT</h1>
    <h2 id="subtitle-1">
        Domine a Terapia Manual, seja mais efetivo nos seus tratamentos e aumente em até 3x seu faturamento
    </h2>

    <div id="form">
        <div id="form__callout">
            <h3><span class="iconify" data-icon="bi:calendar-check-fill"></span>07 a 10 de junho</h3>
            <span>
                <b>GRATUITO</b>, basta se inscrever, entrar para os grupos VIP e
                participar das aulas online!
            </span>
        </div>

        <div role="main" id="newtimes-formulario-leads-page-9cc80504cb28de1971aa">
        </div>
    </div>
</section>

<section id="background-2">
    <section id="objects-1">
        <div class="object-text-content">
            <p class="title-global-1">O que eu vou aprender nessas aulas?</p>
            <p class="text-global-1">
                Você vai aprender sobre como agregar valor ao seu atendimento, sendo mais efetivo nos tratamentos dos seus pacientes.
                Resolvendo problemas em menor tempo e com mais eficácia, seu consultório ficará cheio e o valor da sua consulta vai aumentar!
            </p>
        </div>
        <div class="image-container">
            <img id="image-illustration" src="assets/images/physio__01.svg" alt="physio_01">
        </div>
    </section>

    <section id="objects-2">
        <div class="object-text-content">
            <div id="line-vertical-2"></div>
            <p class="title-global-2">O que é um fisioterapeuta expert?</p>
            <p class="text-global-2">
                É o Fisioterapeuta que se destaca na sua área de atuação, encara sua carreira como um negócio, busca o êxito
                desejado investindo em capacitação, estudo, planejamento e gestão. O resultado é agenda cheia e retorno financeiro!
            </p>
        </div>
        <div class="image-container">
            <img id="image-illustration" src="assets/images/physio__02.svg" alt="physio_02" srcset="">
        </div>
    </section>
</section>

<section id="background-3">
    <div id="top-scene3">
        <section id="mid-separadores">
            <div id="box-1" class="box">
                <p class="text-global-3">
                    Busque o sucesso profissional com quem já tem resultados.
                </p>
            </div>
            <div id="box-2" class="box">
                <p class="text-global-3">
                    Aulas atualizadas, baseadas 100% em evidências cientificas,
                    técnicas e conteúdos práticos para se tornar um
                    FISIOTERAPEUTA EXPERT.
                </p>
            </div>
            <div id="box-3" class="box">
                <p class="text-global-3">
                    Conhecimento tirado direto da "prática", com milhares de
                    atendimentos e treinamentos realizados nacional e
                    internacionalmente.
                </p>
            </div>
        </section>
    </div>
</section>

<section id="perfil-profissional">
    <div id="perfil">
        <img id="photo-perfil" src="assets/images/DrJoseOrdenes.png" alt="" srcset="">
    </div>

    <div id="right-2">
        <h2 id="title-profissional">Quem é o profissional por trás disso tudo?</h2>
        <p id="name-profissional">Dr. José Ordenes</p>
        <p id="about-profissional">
            Referência internacional em Fisioterapia na área de Reabilitação<br> Ortopédica e Terapia Manual. Ministra palestras em diversos países ao
            lado de grandes nomes da saúde. É coordenador docente de pós-graduação em renomadas instituições de<br>
            ensino superior na área de Fisioterapia Ortopédica, Desportiva e Terapia<br>
            Manual.
        </p>
    </div>
</section>

<?php
/** Last call to action button */
?>
<section id="footer">
    <p id="title-footer">Se você leu até aqui é porque o conteúdo te interessa!</p>
    <p id="subtitle-footer">Faça sua inscrição agora! É fácil, simples e rápido!</p>

    <span id="btn" type="button">QUERO SER EXPERT</span>
</section>

<script type="text/javascript" src="https://d335luupugsy2.cloudfront.net/js/rdstation-forms/stable/rdstation-forms.min.js"></script>
<script type="text/javascript">
    new RDStationForms('newtimes-formulario-leads-page-9cc80504cb28de1971aa', 'UA-154439101-1').createForm();
</script>