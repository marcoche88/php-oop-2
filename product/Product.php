<?php

class Product
{
    protected $title;
    protected $price;
    protected $quantity;

    public function __construct($_title, $_price, $_quantity)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->quantity = $_quantity;
    }

    // getter
    public function get_title()
    {
        return $this->title;
    }

    public function get_price()
    {
        return $this->price;
    }

    public function get_quantity()
    {
        return $this->quantity;
    }

    // setter
    public function set_title($_title)
    {
        $this->title = $_title;
    }

    public function set_price($_price)
    {
        $this->price = $_price;
    }

    public function set_quantity($_quantity)
    {
        $this->quantity = $_quantity;
    }
}
