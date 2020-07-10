<?php


namespace application\models;

use application\components\Db;

class Product
{
    private $param1;
    private $param2;
    private $param3;

    public function __construct($param1 = null, $param2 = null, $param3 = null)
    {
        if (isset($param1)){
            $this->param1 = $param1;
        }
        if (isset($param2)){
            $this->param2 = $param2;
        }
        if (isset($param3)){
            $this->param3 = $param3;
        }
    }

    public function cinemaIndex(){
        $select = Db::getConnection()->query("SELECT * FROM `cinemas`");
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function newFilmsIndex(){
        $year = date('Y');
        $select = Db::getConnection()->prepare("SELECT * FROM `films` WHERE `film_date`=? ORDER BY `id` DESC");
        $select->execute([$year]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function todayFilmsIndex(){
        $date = date('Y-m-d');
        $select = Db::getConnection()->prepare("SELECT * FROM `films` WHERE `id` IN (
                                                            SELECT `film_id` FROM `cinemas_films` WHERE `date_id` IN (
                                                                SELECT `id` FROM `date_films` WHERE `start`>='{$date} 00:00:00' AND `start`<='{$date} 23:59:59'))");
        $select->execute();
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function allFilms(){
        $select = Db::getConnection()->query("SELECT * FROM `films` ORDER BY `id` DESC");
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function searchFilm(){
        $arrRating = explode('/', $this->param2);
        $ratStart = array_shift($arrRating);
        $ratEnd = array_pop($arrRating);
        $arrYear = explode('/', $this->param3);
        $yearStart = array_shift($arrYear);
        $yearEnd = array_pop($arrYear);
        if (isset($this->param1) && $this->param1 == 'All genres'){
            $genre = '';
        }else{
            $genre = " `genre`='{$this->param1}' AND ";
        }
        $search = Db::getConnection()->prepare("SELECT * FROM `films` WHERE {$genre} `rating` BETWEEN {$ratStart} 
                                                            AND {$ratEnd} AND `film_date` BETWEEN {$yearStart} AND {$yearEnd}");
        $search->execute();
        return $search->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function singleCinema(){
        $select = Db::getConnection()->prepare("SELECT * FROM `cinemas` WHERE `id`=?");
        $select->execute([$this->param1]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function singleCinemaAllFilms(){
        $select = Db::getConnection()->prepare("SELECT * FROM `films` WHERE `id` IN (
                                                            SELECT `film_id` FROM `cinemas_films` WHERE `cinema_id`=?)");
        $select->execute([$this->param1]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getFilmsCinema(){
        $select = Db::getConnection()->prepare("SELECT * FROM `films` WHERE `id`=?");
        $select->execute([$this->param2]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function singleFilmCinemas(){
        $select = Db::getConnection()->prepare("SELECT * FROM `cinemas` WHERE `id` IN (
                                                            SELECT `cinema_id` FROM `cinemas_films` WHERE `film_id`=?)");
        $select->execute([$this->param2]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getTimeFilms(){
        $select = Db::getConnection()->prepare("SELECT * FROM `date_films` WHERE `id` IN (
                                                            SELECT `date_id` FROM `cinemas_films` WHERE `film_id`=? AND `cinema_id`=?) ORDER BY `start`");
        $select->execute([$this->param2, $this->param1]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function getSelectSeats(){
        $select = Db::getConnection()->prepare("SELECT * FROM `selected` WHERE `date_film_id`=?");
        $select->execute([$this->param2]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function orderedSeats(){
        $insert = Db::getConnection()->prepare("INSERT INTO `selected` (`date_film_id`, `seats`) VALUES (?, ?)");
        $insert->execute([$this->param1, $this->param2]);
        return true;
    }

    public function searchFilmSingleCinema(){
        if (!empty($this->param2)){
            $param2 = " `start`>='{$this->param2} 00:00:00' AND ";
        }else{
            $param2 = '';
        }
        if (!empty($this->param3)){
            $param3 = " `start`<='{$this->param3} 23:59:59' AND ";
        }else{
            $param3 = '';
        }
        if (!empty($this->param2) && $this->param3 == null){
            $param2 = " `start`>='{$this->param2} 00:00:00' AND `start`<='{$this->param2} 23:59:59' AND ";
            $param3 = '';
        }
        $select = Db::getConnection()->prepare("SELECT * FROM `films` WHERE `id` IN (
                                                            SELECT `film_id` FROM `cinemas_films` WHERE `date_id` IN (
                                                                SELECT `id` FROM `date_films` WHERE {$param2} {$param3} `cinema_id`=?))");
        $select->execute([$this->param1]);
        return $select->fetchAll(\PDO::FETCH_ASSOC);
    }

    public function runCron(){
        $datetime = date('Y-m-d H:i:s');
        $update = Db::getConnection()->prepare("UPDATE `date_films` SET `start`=`start` + INTERVAL 5 DAY, 
                                `end`=`end` + INTERVAL 5 DAY WHERE `start`<='{$datetime}'");
        return $update->execute();
    }

}