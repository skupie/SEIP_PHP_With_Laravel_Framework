<?php


namespace App\classes;


class Home
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            0 => [
                'id'=>1,
                'name'=>'Yeasin ',
                'email'=>'yeasin@gmail.com',
                'contact'=>'0168xxxxx99 ',
                'img'=>'1.jpg',
            ],
            1 =>[
                'id'=>2,
                'name'=>'Shakil ',
                'email'=>'Shakil@gmail.com',
                'contact'=>'0167xxxxx58 ',
                'img'=>'2.jpg'
            ],
            2=> ['id'=>3,
                'name'=>'Mustakim ',
                'email'=>'Mustakim@gmail.com',
                'contact'=>'0140xxxxx96 ',
                'img'=>'3.jpg'
            ],
        ];
    }

    public function index(){
        //printing value from the array key:value pair
        foreach ($this->students as $index => $student){

            foreach ($student as $item){
                echo $item;
            }
            echo "<br/>";
//            echo $student['name'].' '.$student['email'].' '.$student['contact'];
        }
    }
}
