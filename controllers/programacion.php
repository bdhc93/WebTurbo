<?php

class Programacion extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('programacion/index');
    }

}