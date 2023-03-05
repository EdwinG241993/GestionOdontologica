<div id="contenido">
    <h2>Asignar Cita</h2>
    <form action="index.php?accion=guardarCita" method="post" id="frmasignar">
        <table>
            <tr>
                <td>Documento del paciente</td>
                <td><input type="text" name="asignarDocumento" id="asignarDocumento" required/></td>
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
                    <select id="medico" name="medico" onchange="cargarHoras()">
                        <option value="-1" selected="selected">---Seleccionar Medico---</option>
                        <?php
                        while ($fila = $result->fetch_object()) {
                            ?>
                            <option value="<?php echo $fila->UsuId ?>">
                                <?php echo $fila->UsuIdentificacion . " " . $fila->UsuNombres . " " . $fila->UsuApellidos ?>
                            </option>
                            <?php
                        }
                        ?>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Fecha</td>
                <td><input type="text" name="fecha" id="fecha" readonly="readonly" onchange="cargarHoras()" required/></td>
            </tr>
            <tr>
                <td>Hora</td>
                <td>
                    <select id="hora" name="hora" onmousedown="seleccionarHora()">
                        <option value="-1" selected="selected">---Seleccione la hora---</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Consultorio</td>
                <td>
                    <select id="consultorio" name="consultorio">
                        <option value="-1" selected="selected">---Seleccionar el consultorio---</option>
                        <?php
                        while ($fila2 = $result2->fetch_object()) {
                            ?>
                            <option value="<?php echo $fila2->ConNumero ?>">
                                <?php echo $fila2->conNumero . " " . $fila2->ConNombre ?>
                            </option>
                            <?php
                        }
                        ?>
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

<!-- Formulario Modal -->
<div id="dialog-form" title="Agregar nuevo Paciente">
    <p class="validateTips">Todos los campos son requeridos.</p>
    <form action="index.php?accion=ingresarPaciente" method="post" id="agregarPaciente">
        <table>
            <tr>
                <td>Documento</td>
                <td><input type="text" name="pacDocumento" id="pacDocumento" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Nombres</td>
                <td><input type="text" name="pacNombres" id="pacNombres"></td>
            </tr>
            <tr>
                <td>Apellidos</td>
                <td><input type="text" name="pacApellidos" id="pacApellidos"></td>
            </tr>
            <tr>
                <td>Fecha Nacimiento</td>
                <td><input type="text" name="pacNacimiento" id="pacNacimiento" readonly="readonly"></td>
            </tr>
            <tr>
                <td>Sexo</td>
                <td>
                    <select id="pacSexo" name="pacSexo">
                        <option value="-1" selected="selected">--Seleccione Sexo</option>
                        <option>m</option>
                        <option>f</option>
                    </select>
                </td>
            </tr>
        </table>    
    </form>
</div>
