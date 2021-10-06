<?php

require_once __DIR__ . '/Product.php';

class Movie extends Product
{
    private $director;
    private $actors = [];

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

    public function get_actors()
    {
        return $this->actors;
    }

    // setter
    public function set_director($_director)
    {
        $this->director = $_director;
    }

    public function set_actors($_actors)
    {
        if (is_array($_actors)) {
            $this->actors = $_actors;
        } else {
            throw new Exception('Il valore inserito non è un array');
        }
    }
}
