<?php

namespace Strategy\Speak;

class DogSpeak implements ISpeak
{

    public function run()
    {
        echo 'Dogs bark bark bark.';
        return;
    }
}