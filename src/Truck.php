<?php

namespace Adair\Logistic;

class Truck implements Transport
{

    public function toTransport(): void
    {
        echo 'Tranport by truck!!!';
    }
}