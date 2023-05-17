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

//        $this->arr =[
//            0 =>['Name'=> 'Yeasin',
//                'Email'=> 'Yeasin@gmail.com',
//                'Contact'=> '0168xxxxx99'],
//            1=>[],
//            2=>[]
//        ];

        echo"<br/>"."Using For Each Loop: ";
        $this ->arr = ['Hello','My Name is','Yeasin'];
        foreach ($this->arr as $item)
        {
            echo $item . ' ';
        }
        echo '<br/>'.'<br/>';
//        array using for loop
        echo "Using For Each Loop: ";
        for ($this->i = 0; $this->i < $this->j; $this->i++){
        echo $this->arr[$this->i]." ";
    }
    echo "<br/>";
//        array using for loop ends

    echo "<br/>"."DO While Loop: ";
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

//        $this -> z = $this->z - $this->y;
//        switch ( $this->z )
//
//        {
//            case 10:
//                echo "Hello World";
//                break;
//
//            case 20:
//                echo "Hello Bangladesh";
//                break;
//
//            case 30:
//                echo "Hello BITM";
//                break;
//
//            default:
//                echo "Hello Basis";
//        }
//        if($this->z > 50){
//            echo "$this->z is greater than 50";
//        }
//        elseif($this->z < 50){
//            echo " $this->z is less than 50";
//        }
//        else{
//            echo "Equal ";
//        }

        //Array
        echo '<br/>'."Array".'<br/>'."======================".'<br/>';
        echo $this->arr[0];

        foreach($this->arr as $key => $item) //array object sign
        {
            echo '<br/>'. $key;
        }
        foreach($this->arr as $item)
        {
            echo '<br/>'. $item;
        }

        $this->example = [
            0 => [
                'name' => 'Johir',
                'email' => 'johir@gmail.com',
                'mobile' => '123456'
            ],
            1 => [
                'name' => 'Arman',
                'email' => 'arman@gmail.com',
                'mobile' => '987456'
            ],
            2 => [
                'name' => 'aj',
                'email' => 'aj@gmail.com',
                'mobile' => '1321654'
            ]
        ];

        echo '<br/>'.'<br/>'. $this->example[0]['name'];

    }
}
