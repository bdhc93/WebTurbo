<?php

class Nosotros extends Controller {

    function __construct()
    {
        parent::__construct();
        $this->view->nosotros = [];
        $this->view->mensaje="";
    }

    function render(){
        $nosotros = $this->model->getMisionVision("NOSOTROS");

        $this->view->nosotros = $nosotros;

        $this->view->render('nosotros/index');
    }

    function responsabilidad_social()
    {
        $this->view->render('nosotros/responsabilidad_social');
    }

    function admmisionvision(){
        $nosotros = $this->model->getMisionVision("NOSOTROS");

        $this->view->nosotros = $nosotros;

        $this->view->render('nosotros/admmisionvision');
    }

    function _updateMivisonVision(){
        $id = $_POST['id'];
        $vista = $_POST['vista'];
        $titulo_1 = $_POST['titulo_1'];
        $descripcion_1 = $_POST['descripcion_1'];
        $descripcion_1_2 = $_POST['descripcion_1_2'];
        $icono_1 = $_POST['icono_1'];
        $titulo_2 = $_POST['titulo_2'];
        $descripcion_2 = $_POST['descripcion_2'];
        $descripcion_2_2 = $_POST['descripcion_2_2'];
        $icono_2 = $_POST['icono_2'];
        $titulo_3 = $_POST['titulo_3'];
        $descripcion_3 = $_POST['descripcion_3'];
        $descripcion_3_2 = $_POST['descripcion_3_2'];
        $icono_3 = $_POST['icono_3'];
        $titulo_4 = $_POST['titulo_4'];
        $descripcion_4 = $_POST['descripcion_4'];
        $descripcion_4_2 = $_POST['descripcion_4_2'];
        $icono_4 = $_POST['icono_4'];

        $mensaje = "";

        if($this->model->update(['id' => $id,
            'vista' => $vista,
            'titulo_1' => $titulo_1,
            'descripcion_1' => $descripcion_1,
            'descripcion_1_2' => $descripcion_1_2,
            'icono_1' => $icono_1,
            'vista' => $vista,
            'titulo_2' => $titulo_2,
            'descripcion_2' => $descripcion_2,
            'descripcion_2_2' => $descripcion_2_2,
            'icono_2' => $icono_2,
            'titulo_3' => $titulo_3,
            'descripcion_3' => $descripcion_3,
            'descripcion_3_2' => $descripcion_3_2,
            'icono_3' => $icono_3,
            'titulo_4' => $titulo_4,
            'descripcion_4' => $descripcion_4,
            'descripcion_4_2' => $descripcion_4_2,
            'icono_4' => $icono_4])){
            $mensaje = true;
        }else {
            $mensaje = false;
        }

        $this->view->mensaje = $mensaje;

        $this->view->render('nosotros/_mensaje');
    }

    function uploadImage(){
        $this->view->render('administracion/upload');
    }
}