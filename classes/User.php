<?php
class User
{
    # Properties
    public $userID;
    public $name;
    public $surname;
    # Methods
    function __construct($id, $name, $surname)
    {
        $this->userID = $id;
        $this->name = $name;
        $this->surname = $surname;
    }
    function __toString()
    {
        return $this->userID . " : " . $this->name . " " . $this->surname;
    }
}