<?php

namespace Decorator\Action;

class Meow extends Action
{
    public function act()
    {
        parent::act();
        echo 'I meow.';
    }
}