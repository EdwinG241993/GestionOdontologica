<?php

require_once './Modelo/VistaModelo.php';

class VistaControlador extends VistaModelo {
    
    public function ObtenerPlantillaCtr() {
        return require_once './Vista/plantilla.php';
    }

    public function ObtenerVistaCtr() {
        if (isset($_GET['accion'])) {
            $ruta = explode('/', $_GET['accion']);
            $respuesta = VistaModelo::ObtenerVistaMdl($ruta[0]);
        } else {         
            $respuesta = "login";
        }
        return $respuesta;
    }
}

