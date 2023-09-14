<?php

namespace Decorator\Action;

class Bark extends Action
{
    public function act()
    {
        parent::act();
        echo 'I bark.';
    }
}