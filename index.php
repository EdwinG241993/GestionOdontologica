<?php

error_reporting(E_ALL ^ E_NOTICE);

require_once './Controlador/Controlador.php';
require_once './Modelo/GestorCita.php';
require_once './Modelo/Cita.php';
require_once './Modelo/Paciente.php';
require_once './Modelo/Conexion.php';

$controlador = new Controlador();

if ($_GET['accion'] == "asignar") {
    $controlador->verPagina('./Vista/html/asignar.php');
} elseif ($_GET['accion'] == "consultar") {
    $controlador->verPagina('./Vista/html/consultar.php');
} elseif ($_GET['accion'] == "cancelar") {
    $controlador->verPagina('./Vista/html/cancelar.php');
} elseif ($_GET['accion'] == "guardarCita") {
    $controlador->agregarCita($_POST["asignarDocumento"], $_POST["medico"], $_POST["fecha"], $_POST["hora"], $_POST["consultorio"]);
} elseif ($_GET['accion'] == "consultarCita") {
    $controlador->consultarCitas($_POST["consultarDocumento"]);
} elseif ($_GET['accion'] == "cancelarCita") {
    $controlador->cancelarCitas($_POST["cancelarDocumento"]);
} else {
    $controlador->verPagina('./Vista/html/inicio.php');
}
