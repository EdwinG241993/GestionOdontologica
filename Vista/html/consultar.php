<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestion Odontologica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
        <script type="text/javascript" src="Vista/jquery/jquery-3.6.1.min.js"></script>
        <script type="text/javascript" src="Vista/js/script.js"></script>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
            </div>
            <ul id="menu">
                <li><a href="index.php">Inicio</a></li>
                <li><a href="index.php?accion=asignar">Asignar Cita</a></li>
                <li class="activa"><a href="index.php?accion=consultar">Consultar Cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Consultar Cita</h2>
                <form action="index.php?accion=consultarCita" method="post" id="fmrconsultar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="consultarDocumento" id="consultarDocumento"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="consultarConsultar" value="Consultar" id="consultarConsultar"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><div id="paciente2"></div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
