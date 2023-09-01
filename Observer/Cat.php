<?php

namespace Observer;

class Cat implements IObserver
{
    private IObservable $observable;

    public function __construct(IObservable $observable)
    {
        $this->observable = $observable;
    }

    public function update()
    {
        echo 'Cat rush into ' . $this->observable->getLocation() . '.';
    }
}