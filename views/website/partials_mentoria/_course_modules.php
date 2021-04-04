<?php
    $modulesArray = [
        [ 'title' => 'Módulo I', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo II', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo III', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo IV', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo V', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo VI', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo VII', 'short-description' => '', 'description' => '' ],
        [ 'title' => 'Módulo VII', 'short-description' => '', 'description' => '' ]
    ];

    $processedModules = [];
    $moduleDiv = <<<ModuleDiv
        <article class="module-card">
            <div class="card-front">
                <h2 class="title">%moduleTitle</h2>
                <p class="short-description">%shortDescription<p>
            </div>

            <div class="card-back">
                <p class="long-description">%description</p>
            </div>
        </article>
    ModuleDiv;

    foreach ($modulesArray as $key => $module) {
        $currentModule = str_replace('%moduleTitle', $module['title'], $moduleDiv);
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