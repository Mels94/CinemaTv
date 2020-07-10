<?php

namespace application\controllers;

use application\base\BaseController;
use application\models\Product;
use application\components\Auth;
use application\models\Contact;


class SiteController extends BaseController
{
    public function actionIndex()
    {
        $index = new Product();
        $this->view->setTitle('Cinemas');
        $this->view->render('site/index', [$index->cinemaIndex(),
            $index->newFilmsIndex(), $index->todayFilmsIndex()]);
        return true;
    }

    public function actionFilmsGrid()
    {
        if (!empty($_POST) && isset($_POST['genre'])){
            $filmGrid = new Product($_POST['genre'], $_POST['ratingStartEnd'], $_POST['yearsStartEnd']);
            echo json_encode($filmGrid->searchFilm());
            die;
        }
        $filmGrid = new Product();
        $this->view->setTitle('Films Grid');
        $this->view->render('site/filmsGrid', $filmGrid->allFilms());
        return true;
    }

    public function actionFilmsList()
    {
        if (!empty($_POST) && isset($_POST['genre'])){
            $filmGrid = new Product($_POST['genre'], $_POST['ratingStartEnd'], $_POST['yearsStartEnd']);
            echo json_encode($filmGrid->searchFilm());
            die;
        }
        $filmList = new Product();
        $this->view->setTitle('Films List');
        $this->view->render('site/filmsList', $filmList->allFilms());
        return true;
    }

    public function actionContact()
    {
        if (!empty($_POST) && isset($_POST['submit'])){
            $contact = new Contact($_POST);
            if (!empty($contact->validate())){
                $validate = $contact->validate();
                echo json_encode(['success' => false, 'message' => $validate]);
                die;
            }
            if ($contact->sendEmail() == true){
                echo json_encode(['success' => true, 'message' => 'Successful!']);
                die;
            }
        }
        $this->view->setTitle('Contact');
        $this->view->render('site/contact', []);
        return true;
    }

    public function actionAbout()
    {
        $this->view->setTitle('About');
        $this->view->render('site/about', []);
        return true;
    }

    public function actionSingle_cinema($id)
    {
        if (!empty($_POST) && isset($_POST['id']) && isset($_POST['start'])) {
            $searchFilm = new Product($_POST['id'], $_POST['start'], $_POST['end']);
            echo json_encode($searchFilm->searchFilmSingleCinema());
            die;
        }
        $singleCinema = new Product($id[0]);
        $this->view->setTitle('Single cinema');
        $this->view->render('site/single_cinema', [$singleCinema->singleCinema(),
            $singleCinema->singleCinemaAllFilms()]);
        return true;
    }

    public function actionDetails_film($id)
    {
        if (!empty($_POST) && isset($_POST['cinema_id']) && isset($_POST['film_id'])) {
            $cinemaFilmID = new Product($_POST['cinema_id'], $_POST['film_id']);
            echo json_encode($cinemaFilmID->getTimeFilms());
            die;
        }
        if (!empty($_POST) && isset($_POST['c_id']) && isset($_POST['time_id'])) {
            $cinemaInfo = new Product($_POST['c_id'], $_POST['time_id']);
            $decode = json_decode($cinemaInfo->singleCinema()[0]['cinema_seats']);
            echo json_encode(["cinema" => $decode, 'selected' => $cinemaInfo->getSelectSeats()]);
            die;
        }
        if (!empty($_POST) && isset($_POST['timeId']) && isset($_POST['num'])) {
            if (!Auth::checkLogged()){
                echo json_encode(false);
                die;
            }
            $selected = new Product($_POST['timeId'], $_POST['num']);
            if ($selected->orderedSeats() == true){
                echo json_encode(1);
                die;
            }
        }
        $detailsFilm = new Product(null, $id[0]);
        $this->view->setTitle('Details film');
        $this->view->render('site/details_film', [$detailsFilm->getFilmsCinema(),
            $detailsFilm->singleFilmCinemas()]);
        return true;
    }

    public function actionDetails_film_cinema($param)
    {
        if (!empty($_POST) && isset($_POST['cinema_id']) && isset($_POST['film_id'])) {
            $cinemaFilmID = new Product($_POST['cinema_id'], $_POST['film_id']);
            echo json_encode($cinemaFilmID->getTimeFilms());
            die;
        }
        if (!empty($_POST) && isset($_POST['c_id']) && isset($_POST['time_id'])) {
            $cinema = new Product($_POST['c_id'], $_POST['time_id']);
            $decode = json_decode($cinema->singleCinema()[0]['cinema_seats']);
            echo json_encode(["cinema" => $decode, 'selected' => $cinema->getSelectSeats()]);
            die;
        }
        if (!empty($_POST) && isset($_POST['dateId']) && isset($_POST['num'])) {
            if (!Auth::checkLogged()){
                echo json_encode(false);
                die;
            }
            $selected = new Product($_POST['dateId'], $_POST['num']);
            if ($selected->orderedSeats() == true){
                echo json_encode(1);
                die;
            }
        }
        $detailsFilmCinema = new Product($param[0], $param[1]);
        $this->view->setTitle('Details film cinema');
        $this->view->render('site/details_film_cinema', [$detailsFilmCinema->singleCinema(),
            $detailsFilmCinema->getFilmsCinema()]);
        return true;
    }

    public function actionCron(){
        if (isset($_POST['password']) && $_POST['password'] == '123'){
            $cron = new Product();
            $cron->runCron();
            die;
            //curl -d "password=123" -X POST http://cinema.loc/api/cron
        }
       echo json_encode('error');
    }

    public function actionError()
    {
        $this->view->setLayout('error');
        $this->view->setTitle('error');
        $this->view->render('site/error', []);
        return true;
    }

}