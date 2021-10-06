<?php

require_once __DIR__ . '/User.php';
require_once __DIR__ . '/Discount.php';

class UserPremium extends User
{
    use Discount;
    private $entry_year;
    private $points;

    public function __construct($_name, $_surname, $_email, $_entry_year, $_points)
    {
        $this->entry_year = $_entry_year;
        $this->points = $_points;
        parent::__construct($_name, $_surname, $_email);
        $this->set_discount();
    }

    private function set_discount()
    {
        if ($this->entry_year < 2010 && $this->points > 100) {
            $this->percentage = 40;
        } else {
            $this->percentage = 20;
        }
    }

    // getter
    public function get_entry_year()
    {
        return $this->entry_year;
    }

    public function get_points()
    {
        return $this->points;
    }

    // setter
    public function set_entry_year($_entry_year)
    {
        $this->entry_year = $_entry_year;
    }

    public function set_points($_points)
    {
        $this->points = $_points;
    }
}
