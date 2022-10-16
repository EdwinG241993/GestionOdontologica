<?php

/**
 * @author Edwin
 */

class Usuario {
    
    private $id;
    private $identificacion;
    private $nombre;
    private $apellido;
    private $email;
    private $usuario;
    private $password;
    private $rol;
    
    public function __construct($id, $ident, $nom, $ape, $eml, $usu, $pass, $rol) {
        $this->id = $id;
        $this->identificacion = $ident;
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->email = $eml;
        $this->usuario = $usu;
        $this->password = $pass;
        $this->rol = $rol;
    }
    
    public function obtenerId() {
        return $this->id;
    }
    
    public function obtenerIdentificacion() {
        return $this->identificacion;
    }
    
    public function obtenerNombre() {
        return $this->nombre;
    }
    
    public function obtenerApellido() {
        return $this->apellido;
    }
    
    public function obtenerEmail() {
        return $this->email;
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
