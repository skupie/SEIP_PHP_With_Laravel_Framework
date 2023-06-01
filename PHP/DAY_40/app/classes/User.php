<?php


namespace App\classes;


class User
{
    public $users = [], $email, $password;

    public function __construct($post = null)
    {
        $this->email    = $post['email'];
        $this->password = $post['password'];

        $this->users = [
          0 => [
              'id'          => 1,
              'name'        => 'Yeasin Ahmed Shuvo',
              'email'       => 'yeasin@gmail.com',
              'password'    => '123456',
          ],
          1 => [
              'id'          => 2,
              'name'        => 'Arman Afridi',
              'email'       => 'arman@gmail.com',
              'password'    => '123456',
          ],
          2 => [
              'id'          => 3,
              'name'        => 'Toufiq',
              'email'       => 'Toufiq@gmail.com',
              'password'    => '123456',
          ],
        ];
    }

    public function login(){
        foreach ($this->users as $user){
            if($user['email'] == $this->email && $user['password'] == $this->password){
                session_start();
                $_SESSION['id'] = session_id();
                header('Location: action.php?page=home');
            }
            else
                echo 'Email or Password is incorrect';
                break;
        }
    }
}