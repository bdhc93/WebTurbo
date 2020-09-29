<?php

class Ranking extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->ranking = [];
        $this->view->mensaje="";
    }

    function render(){
        $this->view->render('ranking/index');
    }

    function tv()
    {
        $this->view->render('ranking/ranking_tv');
    }

    function registrarRankingFM(){
        $empresa = $_POST['empresa'];
        $titulo = $_POST['titulo'];
//        $artista = $_POST['artista'];
//        $fecha = $_POST['fecha'];
//        $url = $_POST['url'];
//        $ubicacion = $_POST['ubicacion'];

        $mensaje = "";

        if($this->model->insert(['empresa' => $empresa, 'titulo' => $titulo])){
            $mensaje = "Registro Exitoso.";
        }else {
            $mensaje = "Error en el Registro .";
        }
//        $this->model->insert(['empresa' => $empresa, 'titulo' => $titulo, 'artista' => $artista, 'fecha' => $fecha, 'url' => $url, 'ubicacion' => $ubicacion]);
//        render();
//        $this->view->render('administracion/ranking_fm');

        $this->view->mensaje = $mensaje;

        $this->view->render('administracion/ranking_fm');

    }

    function obtenerRankingFM(){
        $rankings = $this->model->get();

        $this->view->ranking = $rankings;

        $this->view->render('administracion/ranking_fm');
    }

    function ranking_fm(){
        $this->view->render('administracion/ranking_fm');
    }
}