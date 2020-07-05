<?php

namespace application\models;

use application\components\Db;

class Model
{
    public function findByEmail($email)
    {
        $user = Db::getConnection()->prepare("SELECT * FROM `users` WHERE `email`='$email'"); // get user by email
        $user->execute();
        $user_info = $user->fetchAll(\PDO::FETCH_ASSOC);
        if($user_info) {
            return $user_info;
        }
        return false;
    }

    public function findById($id)
    {
        $user = Db::getConnection()->prepare("SELECT * FROM `users` WHERE `id`='$id'"); // get user by id
        $user->execute();
        if($user) {
            return $user;
        }
        return false;
    }

    public function hashPassword($password)
    {
        return str_replace('$2y$10$', '', password_hash($password, PASSWORD_BCRYPT));
    }

    public function generateAuthKey()
    {
        return md5(rand(1,999)); // for example
    }

}