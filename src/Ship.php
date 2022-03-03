<?php

namespace Adair\Logistic;

class Ship implements Transport
{

    public function toTransport(): void
    {
        echo 'Tranport by ship!!!';
    }
}