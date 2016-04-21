<?php


class Product
{
    public $id;
    public $price;
    public $name;
    public $description;
    public $image;

    function __construct($id, $name, $price = 0, $image)
    {
        $this->id = $id;
        $this->price = $price;
        $this->name = $name;
        $this->image = $image;
    }
}



