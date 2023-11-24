<?php

/**
 * Description of ConnectionDB
 *
 * @author Edwin
 */
require_once './controller/ViewController.php';
require_once './core/ConfigApp.php';

$viewCtr = new ViewController();

$viewCtr->getTemplateCtr();






















/**
 * @author Edwin


error_reporting(E_ALL ^ E_NOTICE);

require_once './Controlador/Controlador.php';
require_once './Modelo/GestorCita.php';
require_once './Modelo/GestorUsuario.php';
require_once './Modelo/Usuario.php';
require_once './Modelo/Cita.php';
require_once './Modelo/Paciente.php';
require_once './Modelo/Conexion.php';
require __DIR__.'/vendor/autoload.php';

$controlador = new Controlador();

##if(!isset($_GET['accion']) || $_GET['vista']==""){
##    $_GET['accion']="login";
##}

if($_GET['accion']=="login"){
    $controlador->verPagina('./Vista/html/login.php');
}
elseif ($_GET['accion'] == "iniciarSesion") {
    $controlador->identificarUsuario($_POST['login_usuario'], $_POST['login_clave']);
}
elseif ($_GET['accion'] == "inicio") {
    $controlador->verPagina("Vista/html/inicio.php");
}
elseif ($_GET['accion'] == "asignar") {
    $controlador->cargarAsignar();
} 
elseif ($_GET['accion'] == "consultar") {
    $controlador->verPagina('./Vista/html/consultar.php');
} 
elseif ($_GET['accion'] == "cancelar") {
    $controlador->verPagina('./Vista/html/cancelar.php');
}
elseif ($_GET['accion'] == "administrar") {
    $controlador->verPagina('./Vista/html/administrar.php');
}
elseif ($_GET['accion'] == "guardarUsuario") {
    $controlador->agregarUsuario($_POST["identificacion"], $_POST["nombre"], $_POST["apellido"], $_POST["email"], $_POST["usuario"], $_POST["clave"], $_POST["rol"]);
}
elseif ($_GET['accion'] == "guardarCita") {
    $controlador->agregarCita($_POST["asignarDocumento"], $_POST["medico"], $_POST["fecha"], $_POST["hora"], $_POST["consultorio"]);
} 
elseif ($_GET['accion'] == "consultarCita") {
    $controlador->consultarCitas($_GET["consultarDocumento"]);
} 
elseif ($_GET['accion'] == "cancelarCita") {
    $controlador->cancelarCitas($_GET["cancelarDocumento"]);
} 
elseif ($_GET['accion'] == "consultarPaciente") {
    $controlador->consultarPaciente($_GET['documento']);
} 
elseif ($_GET['accion'] == "ingresarPaciente") {
    $controlador->agregarPaciente($_GET['pacDocumento'], $_GET['pacNombres'], $_GET['pacApellidos'], $_GET['pacNacimiento'], $_GET['pacSexo']);
} 
elseif ($_GET['accion'] == "consultarHora"){
    $controlador->consultarHorasDisponibles($_GET['medico'], $_GET['fecha']);
} 
elseif ($_GET['accion'] == "verCita") {
    $controlador->verCita($_GET["numero"]);
} 
elseif ($_GET['accion'] == "confirmarCancelar"){
    $controlador->confirmarCancelarCita($_GET["numero"]);
} 
elseif ($_GET['accion'] == "reporte"){
    $controlador->generarReporte($_GET["numero"]);
}
else {
    $controlador->verPagina('./Vista/html/login.php');  #Cambio de pagina inicio.php a login.php
}
 */