<?php

namespace Decorator\Action;

class Run extends Action
{
    public function act()
    {
        parent::act();
        echo 'I run.';
    }
}