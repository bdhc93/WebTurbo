<?php

class Programacion extends Controller {

    function __construct()
    {
        parent::__construct();
    }

    function render(){
        $this->view->render('programacion/index');
    }

    function programacio_fm_cuadro(){
        $this->view->render('programacion/programacio_fm_cuadro');
    }

    function programacion_am(){
        $this->view->render('programacion/programacion_am');
    }

    function programacion_am_cuadro(){
        $this->view->render('programacion/programacion_am_cuadro');
    }

    function programacion_pirata(){
        $this->view->render('programacion/programacion_pirata');
    }

    function programacion_pirata_cuadro(){
        $this->view->render('programacion/programacion_pirata_cuadro');
    }

    function programacion_tv(){
        $this->view->render('programacion/programacion_tv');
    }

    function programacion_tv_cuadro(){
        $this->view->render('programacion/programacion_tv_cuadro');
    }

}