<?php


namespace application\components;


class Auth
{
    public static function redirect($url)
    {
        header("Location: ".$url);
    }

    public static function setSession($id){
        $_SESSION['id'] = $id;
    }

    public static function setCookie($name, $cookie_key){
        setcookie('name', $name, time() + (60 * 60 * 24), '/');
        setcookie('cookie_key', $cookie_key, time() + (60 * 60 * 24), '/');
    }

    public static function checkLogged(){
        if (isset($_SESSION['id'])){
            Db::getConnection()->query("SELECT * FROM `users` WHERE `id`='{$_SESSION['id']}'");
            return true;
        }elseif (isset($_COOKIE['cookie_key'])){
            $cookieKey = $_COOKIE['cookie_key'];
            $user = Db::getConnection()->query("SELECT * FROM `users` WHERE `cookie_key`='$cookieKey'");
            if ($user){
                return true;
            }
        }
        return false;
    }

    public static function logout(){
        if ($_COOKIE['cookie_key']){
            Db::getConnection()->query("UPDATE `users` SET `cookie_key`=NULL WHERE `cookie_key`='{$_COOKIE['cookie_key']}'");
            setcookie('name', '', time() - (60 * 60 * 24), '/');
            setcookie('cookie_key', '', time() - (60 * 60 * 24), '/');
        }
        session_unset();
        session_destroy();
        header('Location: /');
        die;
    }
}