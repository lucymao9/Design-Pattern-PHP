<?php

namespace Strategy\Eat;

class CatEat implements IEat
{

    public function run()
    {
        echo 'Cats eat fish.';
        return;
    }
}