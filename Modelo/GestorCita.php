<?php

/**
 * @author Edwin
 */
class GestorCita {

    public function agregarCita(Cita $cita) {
        $conexion = new Conexion();
        $conexion->abrir();
        $fecha = $cita->obtenerFecha();
        $hora = $cita->obtenerHora();
        $paciente = $cita->obtenerPaciente();
        $medico = $cita->obtenerMedico();
        $consultorio = $cita->obtenerConsultorio();
        $estado = $cita->obtenerEstado();
        $observaciones = $cita->obtenerObservaciones();
        $sql = "INSERT INTO citas VALUES (null, '$fecha', '$hora', '$paciente', '$medico', '$consultorio', '$estado', '$observaciones')";
        $conexion->consulta($sql);
        $citaId = $conexion->obtenerCitaId();
        $conexion->cerrar();
        return $citaId;
    }

    public function consultarCitaPorId($id) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT pacientes.*, medicos.*, consultorios.*, citas.*
                FROM pacientes, medicos, consultorios, citas
                WHERE citas.CitPaciente = pacientes.PacIdentificacion
                AND citas.CitMedico = medicos.MedIdentificacion
                AND citas.CitConsultorio = consultorios.ConNumero
                AND citas.CitNumero = $id";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function consultarCitasPorDocumento($doc) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM citas WHERE CitPaciente = '$doc' AND CitEstado = 'Solicitada'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function consultarPaciente($doc) {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT FROM pacientes WHERE PacIdentificacion = '$doc'";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }

    public function agregarPaciente(Paciente $paciente) {
        $conexion = new Conexion();
        $conexion->abrir();
        $identificacion = $paciente->obtenerIdentificacion();
        $nombres = $paciente->obtenerNombres();
        $apellidos = $paciente->obtenerApellidos();
        $fecha = $paciente->obtenerFechaNacimiento();
        $sexo = $paciente->obtenerSexo();
        $sql = "INSERT INTO pacientes VALUES ('$identificacion', '$nombres', '$apellidos', '$fecha', '$sexo')";
        $conexion->consulta($sql);
        $filasAfectadas = $conexion->obtenerFilasAfectadas();
        $conexion->cerrar();
        return $filasAfectadas;
    }
    
    public function consultarMedicos() {
        $conexion = new Conexion();
        $conexion->abrir();
        $sql = "SELECT * FROM medicos";
        $conexion->consulta($sql);
        $result = $conexion->obtenerResult();
        $conexion->cerrar();
        return $result;
    }
}
