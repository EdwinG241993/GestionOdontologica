<?php

/**
 * @author Edwin
 */

if($result->num_rows > 0){
?>
	<table>
		<tr><th>Identificacion</th><th>Nombre</th><th>Sexo</th></tr>
		<?php
		while ($fila = $result->fetch_object()) {; 
		?>
		<tr>
			<td><?php echo $fila->PacIdentificacion; ?></td>
			<td><?php echo $fila->PacNombres." ".$fila->PacApellidos; ?></td>
			<td><?php echo $fila->PacSexo; ?></td>
		</tr>
		<?php
        }
        ?>
	</table>
<?php
	} else {
?>	
	<!-- Scripts Js -->
    <script type="text/javascript" src="Vista/js/script.js"></script>

	El paciente no existe en la base de datos.<br>
	<input type="button" name="ingPaciente" value="Ingresar Paciente" id="create-user" name="ingPaciente">
<?php
}	
?>