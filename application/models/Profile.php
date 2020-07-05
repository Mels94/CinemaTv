<?php


namespace application\models;

use application\components\Db;
use application\components\Validator;

class Profile extends Model
{
    private $name;
    private $surname;
    private $username;
    private $email;
    private $password;
    private $new_password;
    private $confirm_new_password;
    private $remember;

    public function __construct($post)
    {
        if (isset($post['name']) && isset($post['surname']) &&
                isset($post['username'])){
            $this->name = $post['name'];
            $this->surname = $post['surname'];
            $this->username = $post['username'];
        }
        if (isset($post['email'])){
            $this->email = $post['email'];
        }
        if (isset($post['password'])){
            $this->password = $post['password'];
        }
        if (isset($post['new_password']) && isset($post['confirm_new_password'])){
            $this->new_password = $post['new_password'];
            $this->confirm_new_password = $post['confirm_new_password'];
        }
        if (isset($post['remember'])){
            $this->remember = $post['remember'];
        }
    }

    protected function rules()
    {
        return [
            'required' => [
                'first_name' => $this->name,
                'last_name' => $this->surname,
                'username' => $this->username,
                'email' => $this->email
            ],
            'name' => [
                'first_name' => $this->name,
                'last_name' => $this->surname
            ],
            'email' => [
                'email' => $this->email
            ]
        ];
    }

    protected function rulesPass()
    {
        return [
            'required' => [
                'password' => $this->password,
                'new_password' => $this->new_password,
                'confirm_new_password' => $this->confirm_new_password
            ],
            'password' => [
                'new_password' => $this->new_password,
                'confirm_new_password' => $this->confirm_new_password
            ]
        ];
    }

    protected function rulesForgotPass()
    {
        return [
            'required' => [
                'new_password' => $this->new_password,
                'confirm_new_password' => $this->confirm_new_password
            ],
            'password' => [
                'new_password' => $this->new_password,
                'confirm_new_password' => $this->confirm_new_password
            ]
        ];
    }

    public function validate(){
        $validator = new Validator($this->rules());
        if (!empty($validator->validate())){
            return $validator->validate();
        }
        if (!preg_match('#^[A-Za-z0-9-_+!@*/\$\#.]{1,15}$#', $this->username)){
            return ['username' => 'enter 1 to 15 characters'];
        }
        $email =  $_SESSION['email'];
        foreach ($this->getAllEmail() as $item){
            if ($item['email'] == $email){
                continue 1;
            }
            if ($this->email == $item['email']){
                return ['email' => 'there is such an email'];
            }
        }
        return [];
    }

    public function validatePass(){
        $validatePass = new Validator($this->rulesPass());
        if (!empty($validatePass->validate())){
            return $validatePass->validate();
        }
        if ($this->new_password != $this->confirm_new_password) {
            return ['confirm_new_password' => 'repeat the same password'];
        }
        $isPass = password_verify($this->password, '$2y$10$' . $this->selectUsersInfo()[0]['password']);
        if (!$isPass) {
            return ['password' => 'error password'];
        }
        return [];
    }

    public function modalValidate()
    {
        if ($this->password == '') {
            return ['password' => 'password field is empty'];
        }
        $isPass = password_verify($this->password, '$2y$10$' . $this->selectUsersInfo()[0]['password']);
        if (!$isPass) {
            return ['password' => 'error password'];
        }
        return [];
    }


    public function recoveryPasswordValidate(){
        $validatePass = new Validator($this->rulesForgotPass());
        if (!empty($validatePass->validate())){
            return $validatePass->validate();
        }
        if ($this->new_password != $this->confirm_new_password) {
            return ['confirm_new_password' => 'repeat the same password'];
        }
        return [];
    }

    public function getUserInfo(){
        return $this->findByEmail($_SESSION['email']);
    }

    private function getAllEmail(){
        $select = Db::getConnection()->prepare("SELECT `email` FROM `users`");
        $select->execute();
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function changeUserInfo(){
        if ($this->validate() == []){
            $email = $this->selectUsersInfo()[0]['email'];
            $update = Db::getConnection()->prepare("UPDATE `users` SET `first_name`=?, `last_name`=?, `username`=?, 
            `email`=? WHERE `email`=?");
            $update->execute([$this->name, $this->surname, $this->username, $this->email, $email]);
            $_SESSION['email'] = $this->email;
            return true;
        }
        return false;
    }

    public function selectUsersInfo()
    {
        $email =  $_SESSION['email'];
        $select = Db::getConnection()->prepare("SELECT * FROM `users` WHERE `email`=?");
        $select->execute([$email]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function changePassword(){
        if ($this->validatePass() == []){
            $password = $this->hashPassword($this->new_password);
            $update = Db::getConnection()->prepare("UPDATE `users` SET `password`=? WHERE `id`=?");
            $update->execute([$password, $_SESSION['id']]);
            return true;
        }
        return false;
    }

    public function deleteUsers()
    {
        if ($this->modalValidate() == []) {
            $email = $this->selectUsersInfo()[0]['email'];
            $delete = Db::getConnection()->prepare("DELETE FROM `users` WHERE `email`=?");
            $delete->execute([$email]);
            if (isset($_COOKIE['cookie_key'])){
                setcookie('name', '', time() - (60 * 60 * 24), '/');
                setcookie('cookie_key', '', time() - (60 * 60 * 24), '/');
            }
            session_unset();
            session_destroy();
            return true;
        }
        return false;
    }

    public function isEmail()
    {
        $select = Db::getConnection()->prepare("SELECT * FROM `users` WHERE `email`=?");
        $select->execute([$this->email]);
        if (!empty($select->fetchAll(\PDO::FETCH_ASSOC))){
            return true;
        }else{
            return false;
        }
    }

    public function sendMail(){
            $forgotKey = $this->generateAuthKey();
            $serverName = $_SERVER['REQUEST_SCHEME'].'://'.$_SERVER['SERVER_NAME'];
            $to = "$this->email";
            $subject = "CinemaTv";
            $message = '<div style="background-color: #eee;
                            border: 1px solid rgba(0,0,0,.125);
                            border-radius: .25rem;
                            text-align: center;">
                    <div style="padding: .75rem 1.25rem;
                            margin-bottom: 0;
                            background-color: rgba(0,0,0,0.1);
                            border-bottom: 1px solid rgba(0,0,0,.125);">
                        CinemaTv
                    </div>
                    <div style="padding: 1.25rem;">
                        <h1>Password recovery</h1>
                        <p>You can restore your profile by changing the password.
                            Click the <b>recover</b> button to change</p>
                        <a style="display: inline-block;
                                    -moz-user-select: none;
                                    -ms-user-select: none;
                                    border: 1px solid transparent;
                                    padding: .375rem .75rem;
                                    font-size: 1rem;
                                    line-height: 1.5;
                                    border-radius: .25rem;
                                    text-decoration: none;
                                    color: #fff;
                                    background-color: #007bff;" 
                                    onmouseover="this.style.backgroundColor = "\'#f94a4c\'";" 
                                    onmouseout="this.style.backgroundColor = "\'#007bff\'";"
                            href="'. $serverName .'/user/recovery?key='. $forgotKey .'" >Recover</a>
                    </div>
                    <div style="padding: .75rem 1.25rem;
                            background-color: rgba(0,0,0,0.1);
                            border-top: 1px solid rgba(0,0,0,.125);
                            color: #6c757d!important;">
                        support@cinematv.com
                    </div>
                </div>';
            $headers = "MIME-Version: 1.0" . "\r\n";
            $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
            $headers .= 'From: <info@cinematv>' . "\r\n";
            if (mail($to, $subject, $message, $headers)){
                $update = Db::getConnection()->prepare("UPDATE `users` SET `forgot_key`=? WHERE `email`=?");
                $update->execute([$forgotKey, $this->email]);
                return true;
            }
        return false;
    }

    public function isForgotKey(){
        $select = Db::getConnection()->prepare("SELECT * FROM `users` WHERE `forgot_key`=?");
        $select->execute([$_SESSION['forgot_key']]);
        if (!empty($select->fetchAll(\PDO::FETCH_ASSOC))){
            return true;
        }else{
            return false;
        }
    }

    public function recoveryPassword(){
        if ($this->recoveryPasswordValidate() == []){
            $password = $this->hashPassword($this->new_password);
            $update = Db::getConnection()->prepare("UPDATE `users` SET `password`=?, `forgot_key`=NULL WHERE `forgot_key`=?");
            $update->execute([$password, $_SESSION['forgot_key']]);
            unset($_SESSION['forgot_key']);
            return true;
        }
        return false;
    }
}