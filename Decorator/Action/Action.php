<?php

namespace Decorator\Action;

use Decorator\Animal\Animal;

abstract class Action implements Animal
{
    protected Animal $animal;

    public function decorate(Animal $animal)
    {
        $this->animal = $animal;
    }

    public function act()
    {
        $this->animal->act();
    }
}