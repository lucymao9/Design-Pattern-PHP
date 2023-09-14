<?php

namespace Decorator;
require __DIR__ . '/../autoload.php';

$cat1 = new Animal\Cat('ginger');
$cat2 = new Animal\Cat('blue');
$dog = new Animal\Dog('goofy');

$run = new Action\Run();
$jump = new Action\Jump();
$bark = new Action\Bark();
$meow = new Action\Meow();

$run->decorate($cat1);
$jump->decorate($run);
$meow->decorate($jump);
$meow->act();

echo PHP_EOL;

$meow->decorate($cat2);
$run->decorate($meow);
$jump->decorate($run);
$jump->act();

echo PHP_EOL;

$bark->decorate($dog);
$run->decorate($bark);
$jump->decorate($run);
$jump->act();
