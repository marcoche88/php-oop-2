<?php

trait Discount
{
    protected $percentage;

    public function get_info_discount()
    {
        return "Lo sconto applicato è: " . $this->percentage . "%";
    }
}
