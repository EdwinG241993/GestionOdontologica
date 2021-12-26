<?php

/**
 * @author Edwin
 */
class Conexion {

    private $mySQLI;
    private $sql;
    private $result;
    private $filasAfectadas;
    private $citaId;

    public function abrir() {
        $this->mySQLI = new mysqli("localhost", "root", "12345", "citas");
        if (mysqli_connect_error()) {
            return 0;
        } else {
            return 1;
        }
    }

    public function cerrar() {
        $this->mySQLI->close();
    }

    public function consulta($sql) {
        $this->sql = $sql;
        $this->result = $this->mySQLI->query($this->sql);
        $this->filasAfectadas = $this->mySQLI->affected - rows;
        $this->citaId = $this->mySQLI->insert_id;
    }

    public function obtenerResult() {
        return $this->result;
    }

    public function obtenerFilasAfectadas() {
        return $this->filasAfectadas;
    }

    public function obtenerCitaId() {
        return $this->citaId;
    }

}
?>
