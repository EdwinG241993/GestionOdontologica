<?php

class VistaModelo {
    
    protected function ObtenerVistaMdl($vista) {
        
        $listaRutas = ['inicio', 'asignar', 'administrar', 'cancelar', 'consultar'];
        
        if (in_array($vista, $listaRutas)) {
            
            $contenido = "./Vista/html/". $vista ."-accion.php";
            
        } elseif ($vista == "login" || $vista == "index") {
            $contenido = "login";
        } else {
            $contenido = "404";
        }
        return $contenido;
    }
}
