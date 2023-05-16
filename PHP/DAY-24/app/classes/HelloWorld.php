<?php


namespace App\classes;


class HelloWorld
{
    public $messages, $firstName, $lastName, $x, $y, $z;

    public function __construct()
    {
        $this->message = "Hello World";
        $this->x = 10;
        $this->y = 20;
        $this-> x = x+y;
    }

    public function index()
    {
//        $this->firstName = "BASIS";
//        $this->lastName = "BITM";
//        echo gettype($this->firstName);
//        echo "Full Name : ". $this->firstName . " " .$this->lastName;

        echo '<br/>';
        echo $this-> x + $this-> y;
        echo $this-> z;
    }
}