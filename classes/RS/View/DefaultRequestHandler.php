<?php

namespace RS\View;
use RS\Controller\Controller;
use RS\Util\Constants;
use Id1354fw\View\AbstractRequestHandler;


/**
 * All requests without a url matching an existing request handler will be redirected 
 * to the websites index page.
 */
class DefaultRequestHandler extends AbstractRequestHandler{

    protected function doExecute() {
        $this->session->restart(); // start a new session
        $this->session->set(Constants::CONTR_KEY_NAME, new Controller()); //store controller object
        \header('Location: /RS/View/FirstPage');
    }
}