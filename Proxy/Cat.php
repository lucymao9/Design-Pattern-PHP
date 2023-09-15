<?php

namespace Proxy;

class Cat implements Animal
{

    public function run()
    {
        echo 'Cat run.';
    }

    public function jump()
    {
        echo 'Cat jump.';
    }

    public function eat()
    {
        echo 'Cat eat.';
    }
}