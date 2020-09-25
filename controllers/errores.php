<?php


class Errores extends Controller
{
    function __construct()
    {
        parent::__construct();
        $this->view->mensaje = "No existe la página";
        $this->view->render('errores/index');
//        echo "<p> Error al cargar recurso </p>";
    }
}