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
