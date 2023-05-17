<?php


namespace App\classes;


class Home
{
    public $students = [];

    public function __construct()
    {
        $this->students = [
            0 => [],
            1 =>[],
            2=> [],
        ];
    }
}