<?php

class Warehouse
{
    public $products = array();

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function takeAway($id)
    {
        return $this->products[$id];
    }
}