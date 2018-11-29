<?php

namespace RecipeSite\View;
use Id1354fw\View\AbstractRequestHandler;

/**
 * Shows the pancakes recipe page of the Tasty Recipes website.
 */
class PancakesPage extends AbstractRequestHandler {
    protected function doExcecute() {
        return 'rPancakes';
    }
}