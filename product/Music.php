<?php

require_once __DIR__ . '/Product.php';

class Music extends Product
{
    private $artist;
    private $tracks;

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

    public function get_tracks()
    {
        return $this->tracks;
    }

    // setter
    public function set_artist($_artist)
    {
        $this->artist = $_artist;
    }

    public function set_tracks($_tracks)
    {
        if (is_array($_tracks)) {
            $this->tracks = $_tracks;
        } else {
            throw new Exception('Il valore inserito non è un array');
        }
    }
}
