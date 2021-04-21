<?php

namespace Components\Controllers;

class PageController extends ApplicationController
{
    public function getHomepage()
    {
        $this->renderViewport(['website/homepage']);
    }

    public function getAfterSubscription()
    {
        $this->renderViewport(['website/obrigado']);
    }

    public function getMentoria() {
        $this->renderViewport(['website/mentoria']);
    }
}
