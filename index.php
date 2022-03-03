<?php

require 'vendor/autoload.php';

use Adair\Logistic\GroundLogistic;
use Adair\Logistic\SeaLogistic;

$logisticA = new GroundLogistic();
$logisticA->execute();

echo "\n";

$logisticB = new SeaLogistic();
$logisticB->execute();

echo "\n";