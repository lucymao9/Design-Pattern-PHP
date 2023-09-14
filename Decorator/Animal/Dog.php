<?php

namespace Decorator\Animal;

class Dog implements Animal
{
    protected string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function act()
    {
        echo 'I am dog ' . $this->name . '.';
    }
}