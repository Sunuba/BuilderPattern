<?php

namespace BP;


abstract class AbstractOrderDirector {
    abstract function __construct(OrderBuilder $orderBuilder);
    abstract function buildOrder($bread, $condiment, $dressing, $meat);
    abstract function getOrder();
}