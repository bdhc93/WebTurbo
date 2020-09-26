<?php

class Noticias extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('noticias/index');
    }

    function espectaculos()
    {
        $this->view->render('noticias/espectaculos');
    }
    function espectaculos_lista()
    {
        $this->view->render('noticias/espectaculos_lista');
    }
    function futbol_lista()
    {
        $this->view->render('noticias/futbol_lista');
    }
    function politica()
    {
        $this->view->render('noticias/politica');
    }
    function politica_lista()
    {
        $this->view->render('noticias/politica_lista');
    }
}