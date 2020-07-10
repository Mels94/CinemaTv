<?php

namespace application\controllers;

use application\base\BaseController;
use application\components\Auth;
use application\models\Profile;
use application\models\SignIn;
use application\models\SignUp;


class UserController extends BaseController
{
    public function actionSignIn()
    {
        if (Auth::checkLogged()){
            Auth::redirect('/');
            die;
        }
        if (!empty($_POST) && isset($_POST['submit'])){
            $signIn = new SignIn($_POST);
            if (!empty($signIn->validate())){
                $this->view->render('user/signIn', $signIn->validate());
            }
            if ($signIn->login()){
                Auth::redirect('/');
            }
        }
        $this->view->setTitle('SignIn');
        $this->view->render('user/signIn', []);
        return true;
    }

    public function actionSignUp()
    {
        if (Auth::checkLogged()){
            Auth::redirect('/');
            die;
        }
        if (!empty($_POST) && isset($_POST['submit'])){
            $signUp = new SignUp($_POST);
            if (!empty($signUp->validate())){
                $this->view->render('user/signUp', $signUp->validate());
            }
            if ($signUp->register()){
                Auth::redirect('/user/signIn');
            }
        }
        $this->view->setTitle('SignUp');
        $this->view->render('user/signUp', []);
        return true;
    }

    public function actionForgot()
    {
        if (Auth::checkLogged()){
            Auth::redirect('/');
            die;
        }
        if (!empty($_POST) && isset($_POST)){
            $forgot = new Profile($_POST);
            echo  json_encode(['success'=>$forgot->sendMail()]);die;
        }
        $this->view->setTitle('Forgot password');
        $this->view->render('user/forgot', []);
        return true;
    }

    public function actionRecovery()
    {
        if (!empty($_GET) && isset($_GET['key'])){
            $_SESSION['forgot_key'] = $_GET['key'];
            $recovery = new Profile($_POST);
            if ($recovery->isForgotKey() == true){
                $this->view->setTitle('Recovery password');
                $this->view->render('user/recovery', []);
                return true;
            }else{
                Auth::redirect('/error');die;
            }
        }
        if (!empty($_POST) && isset($_POST['submit'])){
            $recovery = new Profile($_POST);
            if (!empty($recovery->recoveryPasswordValidate())){
                $this->view->render('user/recovery', $recovery->recoveryPasswordValidate());
            }
            if ($recovery->recoveryPassword() == true){
                Auth::redirect('/user/signIn');die;
            }
        }
        Auth::redirect('/error');die;
    }

    public function actionProfile()
    {
        if (!Auth::checkLogged()){
            Auth::redirect('/');
            die;
        }
        $profile = new Profile($_POST);
        if (!empty($_POST) && isset($_POST['submit'])){
            if (!empty($profile->validate())){
                $this->view->render('user/profile', [$profile->validate(), $profile->getUserInfo()]);
            }
            if ($profile->changeUserInfo()){
                Auth::redirect('/user/profile');die;
            }
        }
        if (!empty($_POST) && isset($_POST['change'])){
            if (!empty($profile->validatePass())){
                echo json_encode(['success' => false, 'message' => $profile->validatePass()]);
                die;
            }
            if ($profile->changePassword()){
                echo json_encode(['success' => true, 'message' => 'Successful!']);
                die;
            }
        }
        $this->view->setTitle('My profile');
        $this->view->render('user/profile', [1, $profile->getUserInfo()]);
        return true;
    }

    public function actionDelete()
    {
        if (!empty($_POST) && isset($_POST['password'])){
            $delete = new Profile($_POST);
            $validate = $delete->modalValidate();
            if (!empty($delete->modalValidate())){
                echo json_encode(['success' => false, 'message' => $validate]);
                die;
            }
            if ($delete->deleteUsers() == true){
                echo json_encode(['success' => true, 'message' => 'Successful!']);
                die;
            }
            return true;
        }
        return false;
    }

    public function actionLogout(){
        Auth::logout();
    }

}