<?php

namespace FactoryMethod\ToyFactory;

use FactoryMethod\Toy\Toy;
use FactoryMethod\Toy\ToyDog;

class ToyDogFactory implements IToyFactory
{

    public function product(): ToyDog
    {
        return new ToyDog();
    }
}