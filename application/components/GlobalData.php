<?php


namespace application\components;


class GlobalData
{
    public static function getUser(){
        $user = Db::getConnection()->query("SELECT * FROM `users` WHERE `id`='{$_SESSION['id']}'");
        return $user->fetchAll(\PDO::FETCH_ASSOC);
    }

    public static function getGenre(){
        $genre = Db::getConnection()->query("SELECT `genre` FROM `films` GROUP BY `genre` ORDER BY `genre`");
        return $genre->fetchAll(\PDO::FETCH_ASSOC);
    }
}