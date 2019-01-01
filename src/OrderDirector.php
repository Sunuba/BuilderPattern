<?php

namespace BP;

class OrderDirector extends AbstractOrderDirector {
    private $builder = null;
    public function __construct(OrderBuilder $orderBuilder)
    {
        $this->builder = $orderBuilder;
    }

    function buildOrder($bread, $condiment, $dressing, $meat)
    {
        $this->builder->setBread($bread);
        $this->builder->setCondiment($condiment);
        $this->builder->setDressing($dressing);
        $this->builder->setMeat($meat);
    }

    function getOrder()
    {
        return $this->builder->getOrder ();
    }
}