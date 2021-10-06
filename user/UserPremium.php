<?php

require_once __DIR__ . '/user/User.php';
require_once __DIR__ . '/user/Discount.php';

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
}
