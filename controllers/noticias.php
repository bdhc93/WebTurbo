<?php

class Noticias extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('noticias/index');
    }

}