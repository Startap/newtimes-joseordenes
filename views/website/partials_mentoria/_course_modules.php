<?php
    $modulesArray = [
        [ 
            'title' => 'Módulo I', 
            'short-description' => 'Anatomia, fisiologia e biomecânica como a faculdade não ensina', 
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
        [ 
            'title' => 'Módulo II', 
            'short-description' => 'Entenda os princípios da reabilitação através do exclusivo módulo ADT', 
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
        [ 
            'title' => 'Módulo III', 
            'short-description' => 'Avaliação, diagnóstico e tratamento das principais patologias da coluna lombar e pelve', 
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
        [ 
            'title' => 'Módulo IV', 
            'short-description' => 'Entenda melhor a coluna cervical e torácica e tenha maior efetividade no seu tratamento', 
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
        [ 
            'title' => 'Módulo V', 
            'short-description' => 'Conceitos básicos e práticos da reabilitação dos membros superiores por completo',
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
        [ 
            'title' => 'Módulo VI', 
            'short-description' => 'Saiba a importância da interligação entre quadril, joelho e tornozelos', 
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
        [ 
            'title' => 'Módulo VII', 
            'short-description' => 'Entenda a importância e conheça mais sobre a anatomia e biomecânica da ATM', 
            'description' => 'Uma descrição mais longa, com mais palavras e mais elaboradas que a descrição curta, para introduzir ao cliente o conteúdo do módulo atual. Assim temos como mostrar mais informações ao navegante.' 
        ],
    ];

    $processedModules = [];
    $moduleDiv = <<<ModuleDiv
        <article class="card">
            <div class="flip-card">
                <div class="card__side card__side--front" data-key="%dataKey">
                    <h2 class="title">%moduleTitle</h2>
                    <p class="short-description">%shortDescription</p>
                </div>

                <div class="card__side card__side--back" data-key="%dataKey">
                    <h2 class="title">%moduleTitle</h2>
                    <p class="long-description">%description</p>
                </div>
            </div>
        </article>
    ModuleDiv;

    foreach ($modulesArray as $key => $module) {
        $currentModule = str_replace('%moduleTitle', $module['title'], $moduleDiv);
        $currentModule = str_replace('%dataKey', ($key+1), $currentModule);
        $currentModule = str_replace('%shortDescription', $module['short-description'], $currentModule);
        $currentModule = str_replace('%description', $module['description'], $currentModule);

        array_push($processedModules, $currentModule);
    }
?>

<!-- @@ Course content :: Start -->
<section class="content-section" id="course-modules-container">
    <h1>O que eu vou aprender com isso?</h1>

    <section id="course-cards-wrapper">
        <?php echo join(" ", $processedModules); ?>
    </section>
</section>
<!-- @@ Course content :: End -->