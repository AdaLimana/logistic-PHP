<?php

namespace Adair\Logistic;

class GroundLogistic extends AbstractLogistic
{
    public function createTransport(): Transport
    {
        return new Truck();
    }
}