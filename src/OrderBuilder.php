<?php

namespace BP;


class OrderBuilder extends AbstractOrderBuilder {
    private $order = null;

    public function __construct()
    {
        $this->order = new Order();
    }

    function setBread($bread)
    {
        $this->order->setBread ($bread);
    }

    function setCondiment($condiment)
    {
        $this->order->setCondiment ($condiment);
    }

    function setDressing($dressing)
    {
        $this->order->setDressing ($dressing);
    }

    function setMeat($meat)
    {
        $this->order->setMeat ($meat);
    }

    function getOrder()
    {
        return $this->order;
    }
}