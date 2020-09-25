<?php

class Galeria extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('galeria/index');
    }

}