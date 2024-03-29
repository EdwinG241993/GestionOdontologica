<?php



use Spipu\Html2Pdf\Html2Pdf;

/**
 * @author Edwin
 */

class Controlador {
    
    public function verPagina($ruta) {
        require_once $ruta;
    }
    
    public function identificarUsuario($usu, $pass){
        $gestorUsuario = new GestorUsuario();
        $result = $gestorUsuario->identificarUsuario($usu, $pass);
        require_once "Vista/html/iniciarSesion.php";
    }
    
    public function agregarCita($doc, $med, $fec, $hor, $con) {
        $cita = new Cita(null, $fec, $hor, $doc, $med, $con, "Solicitada", "Ninguna");
        $gestorCita = new GestorCita();
        $id = $gestorCita->agregarCita($cita);
        $result = $gestorCita->consultarCitaPorId($id);
        require_once "Vista/html/confirmarCita.php";
        exit();
    }

    public function consultarCitas($doc) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once "Vista/html/consultarCitas.php";
    }
    
    public function cancelarCitas($doc) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitasPorDocumento($doc);
        require_once "Vista/html/cancelarCitas.php";
    }

    public function consultarPaciente($doc) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarPaciente($doc);
        require_once "Vista/html/consultarPaciente.php";
    }

    public function agregarPaciente($doc, $nom, $ape, $fec, $sex) {
        $paciente = new Paciente($doc, $nom, $ape, $fec, $sex);
        $gestorCita = new GestorCita();
        $registros = $gestorCita->agregarPaciente($paciente);
        if ($registros > 0) {
            echo "Paciente Insertado";
        } else {
            echo "Error al Insertar Paciente";
        }  
    }
    
    public function agregarUsuario($id, $nom, $ape, $eml, $usu, $pass, $rol) {
        $usuario = new Usuario(null, $id, $nom, $ape, $eml, $usu, $pass, $rol);
        $gestorUsuario = new GestorUsuario();
        $registros = $gestorUsuario->agregarUsuario($usuario);
        $url = $_SERVER['HTTP_REFERER'];
        header("LOCATION:$url");
        die();
        require_once "Vista/html/administrar.php";
    }
    
    public function cargarAsignar() {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarMedicos();
        $result2 = $gestorCita->consultarConsultorios();
        require_once"Vista/html/asignar.php";
    }
    
    public function consultarHorasDisponibles($medico, $fecha) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarHorasDisponibles($medico, $fecha);
        require_once"Vista/html/consultarHoras.php";
    }
    
    public function verCita($cita) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitaPorId($cita);
        require_once"Vista/html/confirmarCita.php";
    }
    
    public function confirmarCancelarCita($cita) {
        $gestorCita = new GestorCita();
        $registros = $gestorCita->cancelarCita($cita);
        if($registros > 0){
            echo "La cita se ha cancelado con exito";
        }else {
            echo "Error al cancelar la cita";
        }
    }
    
    public function generarReporte($cita) {
        $gestorCita = new GestorCita();
        $result = $gestorCita->consultarCitaPorId($cita);
        ob_start();
        require_once"Vista/html/reporteCita.php";
        $content = ob_get_clean();
        $html2pdf = new HTML2PDF('P', 'A4', 'es', 'true', 'UTF-8');
        $html2pdf->pdf->SetDisplayMode('fullpage');
        $html2pdf->writeHTML($content);
        $html2pdf->Output("Informacion cita.pdf");
    }
}
