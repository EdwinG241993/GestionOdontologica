<?php

/**
 * @author Edwin
 */

class GestorUsuario {
    
    public function identificarUsuario($usu, $pass) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT UsuUsuario, UsuPassword FROM usuarios WHERE UsuUsuario='$usu'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }
}
