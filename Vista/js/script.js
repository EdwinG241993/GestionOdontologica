function consultarPaciente(){
	url="index.php?accion=consultarPaciente&documento=" + $("#asignarDocumento").prop("value",);
	$("#paciente").load(url);
}