<?php


namespace App\classes;


class User
{
    public $users = [];

    public function __construct()
    {

        $this->users = [
          0 => [
              'id'          => 1,
              'name'        => 'Yeasin Ahmed',
              'email'       => 'yeasin@gmail.com',
              'password'    => '123456',
          ],
          1 => [
              'id'          => 2,
              'name'        => 'admin',
              'email'       => 'admin@gmail.com',
              'password'    => '123456',
          ],
          2 => [
              'id'          => 3,
              'name'        => 'Arman Afridi',
              'email'       => 'arman@gmail.com',
              'password'    => '123456',
          ],
        ];
    }

    public function getAllUser()
    {
        return $this->users;
    }

//    public function login()
//    {
//        foreach ($this->users as $user)
//        {
//            if ($user['email'] == $this->email && $user['password'] == $this->password)
//            {
//                session_start();
//                $_SESSION['id'] = session_id();
//                header('Location: action.php?page=home');
//            }
//        }
//        echo 'Email or Password is incorrect.';
//    }
}