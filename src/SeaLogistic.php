<?php

namespace Adair\Logistic;

class SeaLogistic extends AbstractLogistic
{

    public function createTransport(): Transport
    {
        return new Ship();
    }
}