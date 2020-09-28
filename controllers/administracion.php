<?php

class Administracion extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('administracion/index');
    }

    function contactanos(){
        $this->view->render('administracion/contactanos');
    }

    function fotos(){
        $this->view->render('administracion/fotos');
    }

    function videos(){
        $this->view->render('administracion/videos');
    }

    function responsabilidad_social(){
        $this->view->render('administracion/responsabilidad_social');
    }

    function mision_vision(){
        $this->view->render('administracion/mision_vision');
    }

    function deportes(){
        $this->view->render('administracion/deportes');
    }

    function espectaculos(){
        $this->view->render('administracion/espectaculos');
    }

    function politica(){
        $this->view->render('administracion/politica');
    }

    function programacion_fm(){
        $this->view->render('administracion/programacion_fm');
    }

    function programacion_am(){
        $this->view->render('administracion/programacion_am');
    }

    function programacion_tv(){
        $this->view->render('administracion/programacion_tv');
    }

    function programacion_pirata(){
        $this->view->render('administracion/programacion_pirata');
    }

    function ranking_fm(){
        $this->view->render('administracion/ranking_fm');
    }

    function ranking_tv(){
        $this->view->render('administracion/ranking_tv');
    }

    function usuarios(){
        $this->view->render('administracion/usuarios');
    }

    function roles(){
        $this->view->render('administracion/roles');
    }
}