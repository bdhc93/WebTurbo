<?php

include_once 'rankingadm.php';

class Ranking extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('ranking/index');
    }

    function tv()
    {
        $this->view->render('ranking/ranking_tv');
    }
}