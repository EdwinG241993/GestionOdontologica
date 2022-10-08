<?php

/**
 * @author Edwin
 */

class Usuario {
    
    private $usuario;
    private $password;
    private $rol;
    
    public function __construct($usu, $pass, $rol) {
        $this->usuario = $usu;
        $this->password = $pass;
        $this->rol = $rol;
    }
    
    public function obtenerUsuario() {
        return $this->usuario;
    }
    
    public function obtenerPassword() {
        return $this->password;
    }
    
    public function obtenerRol() {
        return $this->rol;
    }
}
