<?php

namespace Proxy;
require __DIR__ . '/../autoload.php';

$fakeCat = new CatProxy();

/**
 * or you can do this.
 * $cat = new Cat();
 * $fakeCat = new CatProxy($cat);
 */

$fakeCat->run();
echo PHP_EOL;
$fakeCat->jump();
echo PHP_EOL;
$fakeCat->eat();

