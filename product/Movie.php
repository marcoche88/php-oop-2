<?php

require_once __DIR__ . '/Product.php';

class Movie extends Product
{
    private $director;

    public function __construct($_title, $_price, $_quantity, $_director)
    {
        $this->director = $_director;
        parent::__construct($_title, $_price, $_quantity);
    }

    // getter
    public function get_director()
    {
        return $this->director;
    }

    // setter
    public function set_director($_director)
    {
        $this->director = $_director;
    }
}
