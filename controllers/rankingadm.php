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
        $contador = $_POST['contador'];
        $url = $_POST['url'];
        $ubicacion = $_POST['ubicacion'];

        $mensaje = "";

        if($this->model->insert(['empresa' => $empresa, 'titulo' => $titulo, 'artista' => $artista, 'contador' => $contador, 'url' => $url, 'ubicacion' => $ubicacion])){
            $mensaje = 1;
        }else {
            $mensaje = 0;
        }

//        render();
//        $this->view->render('administracion/ranking_fm');

        $this->view->mensaje = $mensaje;

        $this->listarrankingFM($mensaje);
//        $this->render();

    }

    function listarrankingFM($mensaje){
        $rankings = $this->model->getFM();

        $this->view->ranking = $rankings;
        $this->view->mensaje = $mensaje;

        $this->view->render('rankingadm/_listarranking');
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

    function partialeditar($param = null){
        $idRanking = $param[0];
        $ranking = $this->model->getById($idRanking);

        session_start();
        $_SESSION['id_ranking'] = $ranking->id;
        $this->view->ranking = $ranking;
        $this->view->render('rankingadm/partialeditar');
    }

    function actualizarRanking(){
        session_start();
        $Id = $_SESSION['id_ranking'];
//        $Id = $_POST['Id'];
        $empresa = $_POST['empresa'];
        $titulo = $_POST['titulo'];
        $artista = $_POST['artista'];
        $contador = $_POST['contador'];
        $url = $_POST['url'];
        $ubicacion = $_POST['ubicacion'];

        unset($_SESSION['id_ranking']);

        $mensaje = "";

        if($this->model->update(['id' => $Id, 'empresa' => $empresa, 'titulo' => $titulo, 'artista' => $artista, 'contador' => $contador, 'url' => $url, 'ubicacion' => $ubicacion])){
            $mensaje = 2;
        }else {
            $mensaje = 0;
        }

        $this->view->mensaje = $mensaje;

        $this->listarrankingFM($mensaje);

    }

    function eliminarRanking($param = null){
        $ranking = $param[0];

        $mensaje = "";

        if($this->model->delete($ranking)){
            $mensaje = 3;
        }else {
            $mensaje = 0;
        }

        $this->view->mensaje = $mensaje;

        $this->listarrankingFM($mensaje);
    }
}