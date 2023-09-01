<?php

namespace Observer;
require __DIR__ . '/../autoload.php';

$food = new Food();
$dog = new Dog($food);
$cat = new Cat($food);

$food->add($cat);
$food->add($dog);

//if food is ready,notify dog and cat.
$food->notify();