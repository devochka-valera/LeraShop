<?php

/**
 * Created by PhpStorm.
 * User: lasko
 * Date: 18.04.2016
 * Time: 23:55
 */
class Cart
{
    public $products = array();

    public function add($product)
    {
        $this->products[] = $product;
    }

    public function remove($productIndex)
    {
        unset($this->products[$productIndex]);
    }
}