<?php

namespace Strategy\Speak;

class CatSpeak implements ISpeak
{

    public function run()
    {
        echo 'Cats meow meow meow.';
        return;
    }
}