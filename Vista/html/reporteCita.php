<?php 

/**
 * @author Edwin
 */

$fila = $result->fetch_object(); 
?>
<h1 style="text-align: center">Informacion de la Cita</h1>
<table style="border: 1px solid #000; font-size: 12pt" aling="center">
    <tr><th colspan="2" style="border: 1px solid #000; text-align: center">Datos del paciente</th></tr>
    <tr><td>Documento</td><td><?php echo $fila->PacIdentificacion; ?></td></tr>
    <tr><td>Nombre</td><td><?php echo $fila->PacNombres." ".$fila->PacApellidos; ?></td></tr>
    <tr><th colspan="2" style="border: 1px solid #000; text-align: center">Datos del Medico</th></tr>
    <tr><td>Documento</td><td><?php echo $fila->MedIdentificacion; ?></td></tr>
    <tr><td>Nombre</td><td><?php echo $fila->MedNombres." ".$fila->MedApellidos; ?></td></tr>
    <tr><th colspan="2" style="border: 1px solid #000; text-align: center">Datos de la Cita</th></tr>
    <tr><td>Numero</td><td><?php echo $fila->CitNumero; ?></td></tr>
    <tr><td>Fecha</td><td><?php echo $fila->CitFecha; ?></td></tr>
    <tr><td>Hora</td><td><?php echo $fila->CitHora; ?></td></tr>
    <tr><td>Numero Consultorio</td><td><?php echo $fila->ConNumero; ?></td></tr>
    <tr><td>Nombre Consultorio</td><td><?php echo $fila->ConNombre; ?></td></tr>
    <tr><td>Estado</td><td><?php echo $fila->CitEstado; ?></td></tr>
    <tr><td>Observaciones</td><td><?php echo $fila->CitObservaciones; ?></td></tr>
</table>
