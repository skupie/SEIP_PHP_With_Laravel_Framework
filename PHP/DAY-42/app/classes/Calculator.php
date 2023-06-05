<?php


namespace App\classes;


class Calculator
{
    public $firstNumber, $secondNumber, $choice, $result;

    public function __construct($post)
    {
        $this->firstNumber  = (int)$post['first_number'];   //post is just a name you can give to any name
        $this->secondNumber = (int)$post['second_number'];
        $this->choice       = $post['choice'];
    }

    public function myCalculator()
    {

//        $this->result       = $this->firstNumber + $this->secondNumber;  //only get one module result

//        if ($this->choice == '+')
//        {
//            $this->result = $this->firstNumber + $this->secondNumber;
//        }
//        elseif ($this->choice == '-')
//        {
//            $this->result = $this->firstNumber - $this->secondNumber;
//        }
//        elseif ($this->choice == '*')
//        {
//            $this->result = $this->firstNumber * $this->secondNumber;
//        }
//        elseif ($this->choice == '/')
//        {
//            $this->result = $this->firstNumber / $this->secondNumber;
//        }
//        elseif ($this->choice == '%')
//        {
//            $this->result = $this->firstNumber % $this->secondNumber;
//        }

        switch ($this->choice) {
            case "+":
                echo $this->result = $this->firstNumber + $this->secondNumber;
                break;
            case "-":
                echo $this->result = $this->firstNumber - $this->secondNumber;
                break;
            case "*":
                echo $this->result = $this->firstNumber * $this->secondNumber;
                break;
            case "/":
                echo $this->result = $this->firstNumber / $this->secondNumber;
                break;
            case "%":
                echo $this->result = $this->firstNumber % $this->secondNumber;
                break;
            default:
                echo $this->result = '0';
        }


//        header('Location: action.php?page=calculator&message='.$this->result."&first_number=".$this->firstNumber."&second_number=".$this->secondNumber);  // without double quotation
        header("Location: action.php?page=calculator&message=$this->result&first_number=$this->firstNumber&second_number=$this->secondNumber");  // with double quotation
//        header("Location: action.php?page=calculator&message=$this->result");  //when we use double quotation
    }
}