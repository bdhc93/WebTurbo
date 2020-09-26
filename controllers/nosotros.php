<?php

class Nosotros extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('nosotros/index');
    }

    function responsabilidad_social()
    {
        $this->view->render('nosotros/responsabilidad_social');
    }
}