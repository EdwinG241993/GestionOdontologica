<?php

/**
 * @author Edwin
 */

class GestorUsuario {
    
    public function agregarUsuario(Usuario $usuario) {
        $conexion = new Conexion();
        $conexion->abrir();
        $ident = $usuario->obtenerIdentificacion();
        $nombre = $usuario->obtenerNombre();
        $apellido = $usuario->obtenerApellido();
        $email = $usuario->obtenerEmail();
        $usu = $usuario->obtenerUsuario();
        $password = password_hash($usuario->obtenerPassword(), PASSWORD_DEFAULT);
        #$password = $usuario->obtenerPassword();
        $rol = $usuario->obtenerRol();
        $sql = "INSERT INTO usuarios VALUES (null, '$ident', '$nombre', '$apellido', '$email', '$usu', '$password', '$rol')";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }
    
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
