<?php

namespace RecipeSite\View;
use Id1354fw\View\AbstractRequestHandler;

/**
 * Shows the meatballs recipe page of the Tasty Recipes website.
 */
class MeatballsPage extends AbstractRequestHandler {
    protected function doExcecute() {
        return 'rMeatballs';
    }
}