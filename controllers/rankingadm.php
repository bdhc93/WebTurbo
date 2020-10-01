<?php

class RankingAdm extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->ranking = [];
        $this->view->mensaje="";
    }

    function render(){
        $rankings = $this->model->getFM();

        $this->view->ranking = $rankings;

        $this->view->render('rankingadm/index');
    }

    function registrarRankingFM(){
        $empresa = $_POST['empresa'];
        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];
        $fecha = $_POST['fecha'];
        $url = $_POST['url'];
        $ubicacion = $_POST['ubicacion'];

        $mensaje = "";

        if($this->model->insert(['empresa' => $empresa, 'titulo' => $titulo, 'artista' => $artista, 'fecha' => $fecha, 'url' => $url, 'ubicacion' => $ubicacion])){
            $mensaje = "Registro Exitoso.";
        }else {
            $mensaje = "Error en el Registro .";
        }

//        render();
//        $this->view->render('administracion/ranking_fm');

        $this->view->mensaje = $mensaje;

//        $this->view->render('administracion/ranking_fm');
        $this->render();

    }

    function registrarRankingTV(){
        $empresa = $_POST['empresa'];
        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];
        $fecha = $_POST['fecha'];
        $url = $_POST['url'];
        $ubicacion = $_POST['ubicacion'];

        $mensaje = "";

        if($this->model->insert(['empresa' => $empresa, 'titulo' => $titulo, 'artista' => $artista, 'fecha' => $fecha, 'url' => $url, 'ubicacion' => $ubicacion])){
            $mensaje = "Registro Exitoso.";
        }else {
            $mensaje = "Error en el Registro .";
        }

//        render();
//        $this->view->render('administracion/ranking_fm');

        $this->view->mensaje = $mensaje;

//        $this->view->render('administracion/ranking_fm');
        $this->rankingtv();

    }

    function rankingtv()
    {
        $rankings = $this->model->getTV();

        $this->view->ranking = $rankings;

        $this->view->render('rankingadm/rankingtv');
    }

    function partialfm(){
        $rankings = $this->model->getFM();

        $this->view->ranking = $rankings;

        $this->view->render('rankingadm/partialfm');
    }

    function partialtv(){
        $rankings = $this->model->getTV();

        $this->view->ranking = $rankings;

        $this->view->render('rankingadm/partialtv');
    }
}