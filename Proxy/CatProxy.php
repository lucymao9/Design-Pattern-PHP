<?php

namespace Proxy;

class CatProxy implements Animal
{
    protected Cat $cat;

    public function __construct(Cat $cat = null)
    {
        $this->cat = $cat?:(new Cat());
    }

    public function run()
    {
        echo 'I am a fake cat.';
        $this->cat->run();
        echo 'I run.';
    }

    public function jump()
    {
        echo 'I am a fake cat.';
        $this->cat->jump();
        echo 'I jump.';
    }

    public function eat()
    {
        echo 'I am a fake cat.';
        $this->cat->eat();
        echo 'I eat.';
    }
}