<?php

namespace Strategy;

use Strategy\Eat\IEat;
use Strategy\Speak\ISpeak;

class Animal
{
    protected ISpeak $speak;
    protected IEat $eat;

    public function __construct(ISpeak $speak, IEat $eat)
    {
        $this->speak = $speak;
        $this->eat = $eat;
    }

    public function speak()
    {
        $this->speak->run();
    }

    public function eat()
    {
        $this->eat->run();
    }


}