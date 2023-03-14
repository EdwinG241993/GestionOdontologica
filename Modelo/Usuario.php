<?php

/**
 * @author Edwin
 */
class Usuario {

    private $identificacion;
    private $nombre;
    private $apellido;
    private $telefono;
    private $email;
    private $genero;
    private $direccion;
    private $cuenta;
    
    private $codigo;
    private $privilegio;
    private $usuario;
    private $clave;
    private $estado;
    private $tipo;
    private $foto;

    public function __construct($id, $nom, $ape, $tel, $eml, $gen, $dir, $ctn, $cod, $pri, $usu, $clv, $est, $tipo, $foto) {
        $this->identificacion = $id;
        $this->nombre = $nom;
        $this->apellido = $ape;
        $this->telefono = $tel;
        $this->email = $eml;
        $this->genero = $gen;
        $this->direccion = $dir;
        $this->cuenta = $ctn;
        
        $this->codigo = $cod;
        $this->privilegio = $pri;
        $this->usuario = $usu;
        $this->clave = $clv;
        $this->estado = $est;
        $this->tipo = $tipo;
        $this->foto = $foto;
    }
    
    protected function obtenerCodigo() {
        return $this->codigo;
    }
    
    protected function obtenerPrivilegio() {
        return $this->privilegio;
    }
    
    protected function obtenerUsuario() {
        return $this->usuario;
    }
    
    protected function obtenerClave() {
        return $this->clave;
    }
    
    protected function obtenerEstado() {
        return $this->estado;
    }
    
    protected function obtenerTipo() {
        return $this->tipo;
    }
    
    protected function obtenerFoto() {
        return $this->foto;
    }
    
    protected function obtenerIdentificacion() {
        return $this->identificacion;
    }

    protected function obtenerNombre() {
        return $this->nombre;
    }

    protected function obtenerApellido() {
        return $this->apellido;
    }

    protected function obtenerTelefono() {
        return $this->telefono;
    }

    protected function obtenerEmail() {
        return $this->email;
    }

    protected function obtenerGenero() {
        return $this->genero;
    }

    protected function obtenerDireccion() {
        return $this->direccion;
    }

    protected function obtenerCuenta() {
        return $this->cuenta;
    }

}
