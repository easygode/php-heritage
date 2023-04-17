<?php

require_once __DIR__ . '/Models/User.php';
require_once __DIR__ . '/Models/Membership.php';
require_once __DIR__ . '/Models/PremiumUser.php';

$gold_membership = new Membership()

$gaetano = new User('Gaetano' , 39);
$gaspare = new PremiumUser ('Gaspare' , 30);

class User
{

    public $name;

    public function __construct(string $_name)
        
    {
        if (strlen($_name) > 3){

        $this->name = $_name;
        }
    }
}

class Employee extends User
{
    public $level;

    public function __construct($_name, $_level)
    {
        parent::__construct($name);

        $this->name = $_name;
        $this->set_level($_level);
    }


}

class LittleUser extends Employee 
{
}

$user = new User('Gaetano');

$employee = new Employee('Ivan', 1);
//$employee->set_level(1);
