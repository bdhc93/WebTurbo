<?php

class Galeria extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('galeria/index');
    }

    function fotos(){
        $this->view->render('galeria/fotos');
    }

}