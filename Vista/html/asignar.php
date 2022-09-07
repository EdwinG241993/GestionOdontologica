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
                <li class="activa"><a href="index.php?accion=asignar">Asignar Cita</a></li>
                <li><a href="index.php?accion=consultar">Consultar Cita</a></li>
                <li><a href="index.php?accion=cancelar">Cancelar Cita</a></li>
            </ul>
            <div id="contenido">
                <h2>Asignar Cita</h2>
                <form action="index.php?accion=guardarCita" method="post" id="frmasignar">
                    <table>
                        <tr>
                            <td>Documento del paciente</td>
                            <td><input type="text" name="asignarDocumento" id="asignarDocumento" /></td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="button" name="asignarConsultar" value="Consultar" id="asignarConsultar" onclick="consultarPaciente()"/>
                            </td>
                        </tr>
                        <tr><td colspan="2"><div id="paciente"></div></td></tr>
                        <tr>
                            <td>Medico</td>
                            <td>
                                <select id="medico" name="medico">
                                    <option value="-1" selected="selected">---Seleccionar Medico---</option>
                                    <option value="12345">12345 Camilo Robledo</option>
                                    <option value="67890">67890 Esteban Salgado</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Fecha</td>
                            <td><input type="text" name="fecha" id="fecha"/></td>
                        </tr>
                        <tr>
                            <td>Hora</td>
                            <td>
                                <select id="hora" name="hora">
                                    <option value="-1" selected="selected">---Seleccione la hora---</option>
                                    <option>08:00:00</option>
                                    <option>08:20:00</option>
                                    <option>08:40:00</option>
                                    <option>09:00:00</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td>Consultorio</td>
                            <td>
                                <select id="consultorio" name="consultorio">
                                    <option value="-1" selected="selected">---Seleccionar el consultorio---</option>
                                    <option value="0">0 Consultas1</option>
                                    <option value="1">1 Tratamientos2</option>
                                </select>
                            </td>
                        </tr>
                        <tr>
                            <td colspan="2">
                                <input type="submit" name="asignarEnviar" value="Enviar" id="asignarEnviar"/>
                            </td>
                        </tr>
                    </table>
                </form>                
            </div>
        </div>
    </body>
</html>
