<?php

namespace Observer;

interface IObservable
{
    public function add(IObserver $observer);

    public function remove(IObserver $observer);

    public function notify();
}