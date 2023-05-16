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
    {echo "DO While Loop: ";
        //do while starts
        $this->i = 10;
        do{
            echo $this->i."&nbsp";
            $this->i++;
        }while($this->i<20);

        //do while ends
    echo "<br/>"."<br/>";
        echo "While Loop: ";
//        while loop starts
        $this->i = 10;
        while($this->i<=20){
            echo $this->i."&nbsp &nbsp";
            $this->i++;
        }
        echo "<br/>"."<br/>";
//        while loop ends

        echo"For Loop: ";
//        for loop starts
        for($this->i = 1; $this->i<=100; $this->i++){
            echo $this->i; echo" &nbsp &nbsp" ;
        }

        echo "<br/>"."<br/>";
//        for loop ends
        
        $this -> z = $this->x - $this->y; 
         switch ( $this->z )
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
