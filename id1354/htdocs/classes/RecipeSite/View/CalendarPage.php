<?php

namespace RecipeSite\View;
use Id1354fw\View\AbstractRequestHandler;

/**
 * Shows the calendar page of the Tasty Recipes website.
 */
class CalendarPage extends AbstractRequestHandler {
    protected function doExcecute() {
        return 'calendar';
    }
}



