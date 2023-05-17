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
                'contact'=>'0168xxxxx99'
            ],
            1 =>[
                'id'=>1,
                'name'=>'Shakil',
                'email'=>'Shakil@gmail.com',
                'contact'=>'0167xxxxx58'
            ],
            2=> [],
        ];
    }
}