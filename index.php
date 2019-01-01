<?php

require_once ('vendor/autoload.php');

use BP\OrderDirector;
use BP\OrderBuilder;

$order = new OrderDirector(new OrderBuilder());
$order->buildOrder ('Italian Bread', 'Cauliflower', 'Mayonnaise', 'Beef');
$order = $order->getOrder ();
$order->make ();
print_r ($order->showOrder ());