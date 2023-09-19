<?php

namespace FactoryMethod\ToyFactory;

use FactoryMethod\Toy\Toy;

interface IToyFactory
{
    public function product(): Toy;
}