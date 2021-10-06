<?php

class User
{
    protected $name;
    protected $surname;
    protected $email;

    public function __construct($_name, $_surname, $_email)
    {
        $this->name = $_name;
        $this->surname = $_surname;
        $this->email = $_email;
    }

    // getter
    public function get_full_name()
    {
        return $this->name . $this->surname;
    }

    public function get_email()
    {
        return $this->email;
    }

    // setter
    public function set_name($_name)
    {
        $this->name = $_name;
    }

    public function set_surname($_surname)
    {
        $this->surname = $_surname;
    }

    public function set_email($_email)
    {
        $this->email = $_email;
    }
}
