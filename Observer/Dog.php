<?php

namespace Observer;

class Dog implements IObserver
{
    private IObservable $observable;

    public function __construct(IObservable $observable)
    {
        $this->observable = $observable;
    }

    public function update()
    {
        echo 'Dog rush into ' . $this->observable->getLocation() . '.';
    }
}