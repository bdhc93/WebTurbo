<?php


class Errores extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "No existe la página";
//        echo "<p> Error al cargar recurso </p>";
    }

    function render(){
        $this->view->render('errores/index');
    }

}