<?php

namespace RecipeSite\View;
use Id1354fw\View\AbstractRequestHandler;
use RecipeSite\Controller\Controller;
use RecipeSite\Util\Constants;

/**
 * All requests without a url matching an existing request handler will be redirected 
 * to the Tasty Recipes index page. 
 */
class DefaultRequestHandler extends AbstractRequestHandler {
    protected function doExcecute() {
        $this->session->restart();
        $this->session->set(Constants::CNTRLR_KEY_NAME, new Controller() );
        \header('Location: /htdocs/RecipeSite/View/FirstPage'); # osäker på file path.. e htdocs rätt?
    }
}