<?php


namespace App\classes;


class HelloWorld
{
    public $message,$x,$y,$z;

    public function __construct()
    {
        $this->message = "Hello World";
        $this-> x =40;
        $this -> y = 20;
    }
    public function index()
    {
         switch ($this->z)
        {
            case 10:
                echo "Hello World";
                break;

            case 20:
                echo "Hello Bangladesh";
                break;

            case 30:
                echo "Hello BITM";
                break;

            default:
                echo "Hello Basis";
        }
        
        
        $this->z = $this->x + $this->y;
        if($this->z > 50){
            echo "$this->z is greater than 50";
        }
        else{
            echo " $this->z is less than 50";
        }
    }
}
