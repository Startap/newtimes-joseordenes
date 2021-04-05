<?php
$faqItemsToRender = [];
$faqItems = [
    [
        'question' => 'Afinal, o que é o curso e para que serve?',
        'answer' => 'É uma mentoria. Nossa meta é ajudar você a se desenvolver e conseguir prospectar mais clientes, aumetando seu faturamento como jovem advogado autônomo.'
    ],
    [
        'question' => 'Como eu posso me inscrever?',
        'answer' => 'É muito fácil fazer parte desta turma. Basta clicar em qualquer um dos botões desta página escritos <b>QUERO ME INSCREVER</b>. As inscrições estão abertas por tempo limitado e de forma promocional. <b>Aproveite!</b>'
    ],
    [
        'question' => 'Quando terei meu acesso liberado?',
        'answer' => 'Usamos uma plataforma que processa seu pagamento de forma automatizada. Assim que ele for processado você receberá, em seu e-mail, usuário e senha de acesso.'
    ],
    [
        'question' => 'Como eu acesso as aulas?',
        'answer' => 'As aulas estão disponíveis de forma online. Assim você pode acessar de qualquer lugar, em qualquer horário, de qualquer dispositivo.'
    ],
    [
        'question' => 'Por quanto tempo as aulas ficarão disponíveis?',
        'answer' => 'As aulas ficam disponíveis por <b>um ano</b> após a liberação de usuário e senha. Acreditamos que esse seja o tempo necessário para colocar todos os ensinamentos em prática.'
    ],
    [
        'question' => 'Há alguém para tirar dúvidas durante o curso?',
        'answer' => 'Sim. Temos grupos no Telegram e no WhatsApp criados especialmente para isso: troca e ajuda durante a mentoria. Além disso também temos a área de membros que possui espaço para conversa e dúvidas.'
    ],
    [
        'question' => 'O que é a <b>garantia incondicional?</b>',
        'answer' => 'A garantia incondicional é um direito seu. Após o pagamento você tem SETE dias para decidir se vai continuar com os estudos ou não. Se não gostou do conteúdo pode pedir seu dinheiro de volta através da plataforma de pagamento. <b>Sem pegadinhas.</b>'
    ],
    [
        'question' => 'Estou pensando em entrar na próxima turma. Posso?',
        'answer' => 'A gente, sinceramente, não recomenda que você faça isso. Não temos previsão de quando haverá outra turma e as vagas desta são limitadas. Aproveite que você já está aqui e efetive sua inscrição.'
    ],
];

$faqHtmlItemElement = <<<FaqHtmlElement
    <article class="faq-card">
        <h6 class="faq-question"><span>%faq_question</span></h6>
        <p class="faq-answer"><span>%faq_answer</span></p>
    </article>
FaqHtmlElement;

foreach ($faqItems as $key => $faqItem) {
    $currentFaq = $faqHtmlItemElement;
    $currentFaq = str_replace('%faq_question', $faqItem['question'], $currentFaq);
    $currentFaq = str_replace('%faq_answer', $faqItem['answer'], $currentFaq);
    array_push($faqItemsToRender, $currentFaq);
}

?>

<!-- @@ FAQ :: Start -->
<section class="content-section" id="faq-container">
    <h1>Perguntas mais frequentes</h1>

    <div id="faq-items-wrapper"><?php echo join('', $faqItemsToRender); ?></div>
</section>
<!-- @@ FAQ :: End -->