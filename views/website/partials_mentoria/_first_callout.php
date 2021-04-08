<section id="first_callout">

    <div class="left-section">
        <h1>
            <span>Método ADT</span>
            <small>Avaliação, Diagnóstico diferenciado e Tratamento</small>
        </h1>

        <h2>
            Domine a terapia manual sendo mais efetivo nos seus tratamentos e <span>aumente em até 3x seu faturamento</span>
        </h2>

        <a href="<?php echo $_ENV['PRODUCT_URL']; ?>" target="_blank" rel="norel nofollow">
            <button class="button-sales-callout">RESERVAR MINHA VAGA NA MENTORIA</button>
        </a>
    </div>

    <div class="right-section">
        <div class="iframe-video-container">
            <?php
            $htmlEmbedParamenters = ['autoplay=0', 'controls=0', 'disablekb=1', 'fs=0', 'modestbranding=1', 'rel=0', 'showinfo=0'];
            $htmlSalesVideoHtml = <<<htmlSalesVideoHtmlTemplate
                    <div class="iframe-video-container">
                    <iframe 
                        width="699" 
                        height="393" 
                        src="https://www.youtube.com/embed/%videoId%?%parameters" 
                        title="YouTube video player" 
                        frameborder="0" 
                        allow="accelerometer; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                        allowfullscreen></iframe>
                    </div>
                htmlSalesVideoHtmlTemplate;
            $htmlSalesVideoHtml = str_replace('%videoId%', '_2hB1YUErZ0', $htmlSalesVideoHtml);
            $htmlSalesVideoHtml = str_replace('%parameters', implode("&", $htmlEmbedParamenters), $htmlSalesVideoHtml);

            echo $htmlSalesVideoHtml;
            ?>
        </div>
    </div>


</section>