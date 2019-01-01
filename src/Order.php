<?php

namespace BP;



class Order {
    private $order = null;
    private $bread = null;
    private $condiment = null;
    private $dressing = null;
    private $meat = null;

    function showOrder()
    {
        return $this->order;
    }

    public function setBread($bread): void
    {
        $this->bread = $bread;
    }

    public function setCondiment($condiment): void
    {
        $this->condiment = $condiment;
    }

    public function setDressing($dressing): void
    {
        $this->dressing = $dressing;
    }

    public function setMeat($meat): void
    {
        $this->meat = $meat;
    }

    function make()
    {
        $this->order = $this->bread . ' ' . $this->condiment . ' ' . $this->dressing . ' ' . $this->meat;
    }


}