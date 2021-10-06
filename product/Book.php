<?php

require_once __DIR__ . '/Product.php';

class Book extends Product
{
    private $writer;

    public function __construct($_title, $_price, $_quantity, $_writer)
    {
        $this->writer = $_writer;
        parent::__construct($_title, $_price, $_quantity);
    }

    // getter
    public function get_writer()
    {
        return $this->writer;
    }

    // setter
    public function set_writer($_writer)
    {
        $this->writer = $_writer;
    }
}
