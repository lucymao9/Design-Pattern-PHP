<?php

namespace Strategy;
require __DIR__ . '/../autoload.php';

use Strategy\Eat\CatEat;
use Strategy\Eat\DogEat;
use Strategy\Speak\CatSpeak;
use Strategy\Speak\DogSpeak;

$dog = new Animal(new DogSpeak(), new DogEat());
$cat = new Animal(new CatSpeak(), new CatEat());

$dog->speak();
$dog->eat();

$cat->speak();
$cat->eat();