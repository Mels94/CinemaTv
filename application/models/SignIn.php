<?php


namespace application\models;

use application\components\Auth;
use application\components\Validator;
use application\components\Db;

class SignIn extends Model
{
    private $email;
    private $password;
    private $remember;

    public function __construct($post)
    {
        $this->email = $post['email'];
        $this->password = $post['password'];
        if (isset($post['remember'])){
            $this->remember = $post['remember'];
        }
    }

    protected function rules()
    {
        return [
            'required' => [
                'email' => $this->email,
                'password' => $this->password
            ]
        ];
    }

    public function validate(){
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())){
            return $validator->validate();
        }
        return [];
    }

    public function getUser(){
        if ($this->validate() == []){
            $user = $this->findByEmail($this->email);
            if ($user){
                $pass = password_verify($this->password, '$2y$10$'.$user[0]['password']);
                if ($pass == true){
                    return $user;
                }
            }
        }
        return false;
    }

    public function login(){
        if ($this->getUser()){
            $user = $this->getUser();
            Auth::setSession($user[0]['id']);
            $_SESSION['email'] = $user[0]['email'];
            $generateKey = $this->generateAuthKey();
            $email = $user[0]['email'];
            if ($this->remember){
                Db::getConnection()->query("UPDATE `users` SET `cookie_key`='$generateKey' WHERE `email`='$email'");
                Auth::setCookie($user[0]['first_name'], $generateKey);
            }
            return true;
        }
        return false;
    }


}