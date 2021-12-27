<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestion Odontologica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?accion=asignar">Asignar Cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar Cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            </ul>
            <div id="contenido">
                <?php $fila = $result->fetch_object(); ?>
                <h2>Informacion de la Cita</h2>
                <table>
                    <tr><th colspan="2">Datos del Paciente</th></tr>
                    <tr>
                        <td>Documento:</td>
                        <td><?php echo $fila->PacIdentificacion; ?></td>
                    </tr>
                    <tr>
                        <td>Nombres:</td>
                        <td><?php echo $fila->PacNombres; ?></td>
                    </tr>
                    <tr><th colspan="2">Datos Medico</th></tr>
                    <tr>
                        <td>Documento:</td>
                        <td><?php echo $fila->MedIdentificacion; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre:</td>
                        <td><?php echo $fila->MedNombres; ?></td>
                    </tr>
                    <tr><th colspan="2">Datos Cita</th></tr>
                    <tr>
                        <td>Numero:</td>
                        <td><?php echo $fila->CitNumero; ?></td>
                    </tr>
                    <tr>
                        <td>Fecha:</td>
                        <td><?php echo $fila->CitFecha; ?></td>
                    </tr>
                    <tr>
                        <td>Hora:</td>
                        <td><?php echo $fila->CitHora; ?></td>
                    </tr>
                    <tr>
                        <td>Numero Consultorio:</td>
                        <td><?php echo $fila->ConNumero; ?></td>
                    </tr>
                    <tr>
                        <td>Nombre Consultorio:</td>
                        <td><?php echo $fila->ConNombres; ?></td>
                    </tr>
                    <tr>
                        <td>Estado:</td>
                        <td><?php echo $fila->CitEstado; ?></td>
                    </tr>
                    <tr>
                        <td>Observaciones:</td>
                        <td><?php echo $fila->CitObservaciones; ?></td>
                    </tr>
                </table>
            </div>
        </div>
    </body>
</html>
