<?php

class Ranking extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->render('ranking/index');
    }

    function tv()
    {
        echo "Ranking TV";
    }

}