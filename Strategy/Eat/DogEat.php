<?php

namespace Strategy\Eat;

class DogEat implements IEat
{

    public function run()
    {
        echo 'Dogs eat bone.';
        return;
    }
}