<?php

namespace App\Controller;

use App\Model\DataStorage\Factory;
use App\Core\Config;


class AuthController extends Controller {

    public function __construct()
    {
        parent::__construct();
        $this->view->setViewPath(__DIR__.'/../../templates/Auth/');
        $this->fileStorage = Factory::newFileStorage(Config::FILE_NAME);
    }

    public function actionLoginForm () {
        
        $this->render("Form", [
            'formPath' => '?t='.$this->classNameNP().'&a=CheckLogin'
        ]);
    }

    public function actionCheckLogin() 
    {
        // print_r ($_POST);
        $this->fileStorage->add($_POST);
        $this->redirect('?t='.$this->classNameNP().'&a=');
    }


    }



?>