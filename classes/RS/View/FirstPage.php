<?php

namespace RS\View;
use Id1354fw\View\AbstractRequestHandler;

/**
 * Shows the index page of the website
 */
class FirstPage extends AbstractRequestHandler{

    protected function doExecute() {
        return 'index';
    }
}