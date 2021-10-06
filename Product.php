<?php

class Product
{
    protected $title;
    protected $price;
    protected $brand;

    public function __construct($_title, $_price, $_brand)
    {
        $this->title = $_title;
        $this->price = $_price;
        $this->brand = $_brand;
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

    public function get_brand()
    {
        return $this->brand;
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

    public function set_brand($_brand)
    {
        $this->brand = $_brand;
    }
}
