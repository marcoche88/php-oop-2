<?php

require_once __DIR__ . '/Product.php';

class Music extends Product
{
    private $artist;

    public function __construct($_title, $_price, $_quantity, $_artist)
    {
        $this->artist = $_artist;
        parent::__construct($_title, $_price, $_quantity);
    }

    // getter
    public function get_artist()
    {
        return $this->artist;
    }

    // setter
    public function set_artist($_artist)
    {
        $this->artist = $_artist;
    }
}
