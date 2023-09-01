<?php

namespace Observer;

class Food implements IObservable
{

    private array $observers;
    private string $location = 'living room';

    public function add(IObserver $observer)
    {
        $this->observers[] = $observer;
    }

    public function remove(IObserver $observer)
    {
        if ($key = array_search($observer, $this->observers)) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update();
        }
    }

    public function getLocation()
    {
        return $this->location;
    }
}