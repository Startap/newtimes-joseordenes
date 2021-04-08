<?php
    $testimonialIds = ['', '', ''];

    $htmlEmbedParamenters = ['autoplay=0', 'controls=0', 'disablekb=1', 'fs=0', 'modestbranding=1', 'rel=0', 'showinfo=0'];
    $htmlTestimonial = <<<HtmlTestimonialTemplate
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
    HtmlTestimonialTemplate;
    $htmlTestimonial = str_replace('%parameters', implode("&", $htmlEmbedParamenters), $htmlTestimonial);
?>

<!-- @@ Testimonial :: Start -->
<section class="content-section" id="testimonials-container">
    <h1>Como vou saber se funciona?</h1>
    <h2>Veja a opinião de quem esteve no campo de batalha conosco e tire suas próprias conclusões.</h2>

    <div id="testimonial-items-wrapper" class="iframe-container-width">
        <?php 
        $divToRender = '';
        foreach ($testimonialIds as $video) {
            $divToRender = $divToRender . str_replace('%videoId%', $video, $htmlTestimonial);
        }

        echo $divToRender;
        ?>
    </div>
</section>
<!-- @@ Testimonial :: End -->