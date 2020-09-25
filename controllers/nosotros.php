<?php

class Nosotros extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('nosotros/index');
    }

    function responsabilidad_social()
    {
//        parent::__construct();
//        $this->view->render('nosotros/responsabilidad_social');
        echo "Saludos";
    }
}