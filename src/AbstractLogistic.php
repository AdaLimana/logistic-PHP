<?php

namespace Adair\Logistic;

abstract class AbstractLogistic
{
    
    abstract public function createTransport(): Transport;
    
    public function execute(): void
    {
        $transport = $this->createTransport();
        $transport->toTransport();
    }
}