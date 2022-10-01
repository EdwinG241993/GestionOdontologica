<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestion Odontologica</title>

         <!-- Hojas de Estilos CSS -->
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>

        <!-- Scripts Js -->
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
                <li><a href="index.php?accion=consultar">Consultar Cita</a></li>
                <li class="activa"><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Cancelar Cita</h2>
                <form action="index.php?accion=cancelarCita" method="post" id="fmrcancelar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="cancelarDocumento" id="cancelarDocumento"/></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="button" value="Consultar" onclick="cancelarCita()" id="cancelarConsultar"/>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2"><div id="paciente3"></div></td>
                        </tr>
                    </table>
                </form>
            </div>
        </div>
    </body>
</html>
