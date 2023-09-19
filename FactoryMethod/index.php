<?php

namespace Decorator;
use FactoryMethod\ToyFactory\ToyCatFactory;
use FactoryMethod\ToyFactory\ToyDogFactory;

require __DIR__ . '/../autoload.php';

$toyCatFactory = new ToyCatFactory();
$toyCat = $toyCatFactory->product();
$toyCat->whoami();
$toyCat->fluffy();
$toyCat->cute();

echo PHP_EOL;

$toyDogFactory = new ToyDogFactory();
$toyDog = $toyDogFactory->product();

$toyDog->whoami();
$toyDog->fluffy();
$toyDog->cute();
