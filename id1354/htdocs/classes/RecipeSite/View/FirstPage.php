<?php

namespace RecipeSite\View;
use Id1354fw\View\AbstractRequestHandler;

/**
 * Shows the index page of the Tasty Recipies website.
 */
class FirstPage extends AbstractRequestHandler {
    protected function doExcecute() {
        return 'index';
    }

}