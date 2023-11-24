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
                    <input type="button" value="Consultar" onclick="consultarCita()"/>
                </td>
            </tr>
            <tr>
                <td colspan="2"><div id="paciente2"></div></td>
            </tr>
        </table>
    </form>
</div>
