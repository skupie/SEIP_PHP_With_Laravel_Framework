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
                'name'=>'Yeasin',
                'email'=>'yeasin@gmail.com',
                'contact'=>[
                    'personal'=>'0168xxxxx99',
                    'parent'=>'0181xxxxx42'
                ],
                'img'=>'1.jpg',
            ],
            1 =>[
                'id'=>2,
                'name'=>'Shakil',
                'email'=>'Shakil@gmail.com',
                'contact'=>[
                    'personal'=>'0167xxxxx58',
                    'parent'=>'0171xxxxx42'
                ],
                'img'=>'2.jpg'
            ],
            2=> ['id'=>3,
                'name'=>'Mustakim ',
                'email'=>'Mustakim@gmail.com',
                'contact'=>[
                    'personal'=>'0140xxxxx96',
                    'parent'=>'0155xxxxx42'
                ],
                'img'=>'3.jpg'
            ],
        ];
    }

    public function index(){
        //printing value from the array key:value pair

        echo "Array value using Foreach Loop: ". "<br/>";

        foreach ($this->students as $student){

            foreach ($student as $key=> $item){
                if(is_array($item)){
                    foreach ($item as $value){
                        echo $value.' ';
                    }
                }
                else
                    echo $item.' ';
            }
            echo "<br/>"."<br/ >";

            echo "Using Print_r builtin function: "."<br/>";
            echo '<pre>';
            print_r($this->students);

            echo "<br/>";
            echo "Using var_dump builtin function: "." <br/>"."<br/>";
            var_dump($this->students);


//            echo $student['name'].' '.$student['email'].' '.$student['contact'];
        }
    }
}
