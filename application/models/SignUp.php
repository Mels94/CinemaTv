<?php


namespace application\models;

use application\components\Db;
use application\components\Validator;


class SignUp extends Model
{
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;

    public function __construct($post)
    {
        $this->name = $post['name'];
        $this->surname = $post['surname'];
        $this->username = $post['username'];
        $this->email = $post['email'];
        $this->password = $post['password'];
    }

    protected function rules()
    {
        return [
            'required' => [
                'first_name' => $this->name,
                'last_name' => $this->surname,
                'username' => $this->username,
                'email' => $this->email,
                'password' => $this->password
            ],
            'name' => [
                'name' => $this->name,
                'surname' => $this->surname
            ],
            'email' => [
                'email' => $this->email
            ],
            'password' => [
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

    public function register(){
        if ($this->validate() == []){
            Db::getConnection()->exec(USERS_TABLE);
            $password = $this->hashPassword($this->password);
            $insert = Db::getConnection()->prepare("INSERT INTO `users` (`first_name`, `last_name`, 
                `username`, `email`, `password`, `cookie_key`, `forgot_key`) VALUES (?, ?, ?, ?, ?, NULL, NULL)");
            $insert->execute([$this->name, $this->surname, $this->username, $this->email, $password]);
            return true;
        }
        return false;
    }
}