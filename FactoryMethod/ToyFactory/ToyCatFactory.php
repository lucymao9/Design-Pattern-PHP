<?php

namespace FactoryMethod\ToyFactory;

use FactoryMethod\Toy\Toy;
use FactoryMethod\Toy\ToyCat;

class ToyCatFactory implements IToyFactory
{

    public function product(): Toy
    {
        return new ToyCat();
    }
}