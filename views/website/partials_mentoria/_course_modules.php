<?php
    $modulesArray = [
        [ 
            'title' => 'Módulo I', 
            'short-description' => 'Anatomia, fisiologia e biomecânica como a faculdade não ensina', 
            'description' => 'Saiba mais sobre a função muscular, óssea e nervosa que comanda e dirige a nossa reabilitação. Entenda o processo de movimento humano, de lesão tissular e como o SNC comanda tudo. Compreenda as técnicas de mobilização e manipulação e seus efeitos.' 
        ],
        [ 
            'title' => 'Módulo II', 
            'short-description' => 'Entenda os princípios da reabilitação através do exclusivo módulo ADT', 
            'description' => 'Entenda os princípios de uma boa efetividade clínica e uso correto dos testes ortopédicos. Obtenha uma linha de raciocínio perfeita para conduzir avaliações e tratamentos. Aprenda os 7 princípios da avaliação clínica e a importância de cada um deles no tratamento.' 
        ],
        [ 
            'title' => 'Módulo III', 
            'short-description' => 'Avaliação, diagnóstico e tratamento das principais patologias da coluna lombar e pelve', 
            'description' => 'Explore e reflita sobre conceitos básicos de anatomia e biomecânica, além de entender seu impacto funcional, social e econômico. Muito além dos exames, entenda conceitos de Dor Irradiada, Dor Glútea profunda e dores lombares diversas.' 
        ],
        [ 
            'title' => 'Módulo IV', 
            'short-description' => 'Entenda melhor a coluna cervical e torácica e tenha maior efetividade no seu tratamento', 
            'description' => 'Entenda os principais conceitos de uma das etapas mais importantes: a avaliação. Desde o entendimento da eficácia de um teste até o reconhecimento de bandeiras vermelhas. As melhores técnicas para um tratamento seguro e eficaz, controlando a dor do paciente.' 
        ],
        [ 
            'title' => 'Módulo V', 
            'short-description' => 'Conceitos básicos e práticos da reabilitação dos membros superiores por completo',
            'description' => 'Aprenda a avaliar de forma simples e assertiva, com um raciocínio clínico focado no cerne do problema. Trate a dor e devolva a função ao paciente em poucas seções.  Treine seu paciente e desenvolva a auto-eficácia para maior rotatividade de pacientes.' 
        ],
        [ 
            'title' => 'Módulo VI', 
            'short-description' => 'Saiba a importância da interligação entre quadril, joelho e tornozelos', 
            'description' => 'Aprenda de forma simples a tratar as principais patologias dos membros inferiores, sem invenções ou técnicas que não tem comprovação científica. Conheça todos os aspectos para elaborar o tratamento de forma individual.' 
        ],
        [ 
            'title' => 'Módulo VII', 
            'short-description' => 'Entenda a importância e conheça mais sobre a anatomia e biomecânica da ATM', 
            'description' => 'Explore e entenda a complexidade das condições relacionadas à articulação temporomandibular. Desenvolva as habilidades para tratar as DTMs, promovendo alívio e controle de sinais sem usar de procedimentos invasivos.' 
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