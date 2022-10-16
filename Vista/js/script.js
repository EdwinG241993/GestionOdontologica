function consultarPaciente() {
    url = "index.php?accion=consultarPaciente&documento=" + $("#asignarDocumento").prop("value", );
    $("#paciente").load(url);
}

$(function () {
    var dialog, form,

    documento = "" + $("#asignarDocumento").prop("value");
    $("pacNacimiento").datepicker();

    //Funcion insertar paciente
    function insertarPaciente() {
        queryString = $("#agregarPaciente").serialize();
        url = "index.php?accion=ingresarPaciente&" + queryString;
        $("#paciente").load(url);
        dialog.dialog("close");
    }

    dialog = $("#dialog-form").dialog({
        autoOpen: false,
        height: 310,
        width: 400,
        modal: true,
        buttons: {
            "Insertar": insertarPaciente,
            Cancelar: function () {
                dialog.dialog("close");
            }
        },
        close: function () {
            form[0].reset();
            allFields.removeClass("ui-state-error");
        }
    });
    form = dialog.find("form").on("submit", function (event) {
        event.preventDefault();
        insertarPaciente();
    });

    $("#create-user").button().on("click", function () {
        $("#pacDocumento").attr("value", documento);
        dialog.dialog("open");
    });
});

function cargarHoras() {
    if (($("#medico").prop("value") == -1) || ($("#fecha").prop("value") == "")) {
        $("#hora").html("<option value='-1' selected='selected'>---Seleccione Hora---</option>");
    } else {
        queryString = "medico=" + $("#medico").prop("value") + "&fecha=" + $("#fecha").prop("value");
        console.log(queryString);
        url = "index.php?accion=consultarHora&" + queryString;
        $("#hora").load(url);
    }
}

function seleccionarHora() {
    if ($("#medico").prop("value") == -1) {
        alert("Debe seleccionar un medico");
    } else if ($("#fecha").prop("value") == "") {
        alert("Debe seleccionar una fecha");
    }
}

function consultarCita() {
    url = "index.php?accion=consultarCita&consultarDocumento=" + $("#consultarDocumento").prop("value");
    $("#paciente2").load(url);
}

function cancelarCita() {
    url = "index.php?accion=cancelarCita&cancelarDocumento=" + $("#cancelarDocumento").prop("value");
    $("#paciente3").load(url);
}

function confirmarCancelar(numero) {
    if (confirm("Esta seguro que desea cancelar la cita " + numero)) {
        $.get("index.php", {accion: 'confirmarCancelar', numero: numero}, function (mensaje) {
            alert(mensaje);
        });
    }
    $("#cancelarConsultar").trigger("click");
}

$(document).ready(function () {
    $("#fecha").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        showOn: "button",
        buttonImage: "Vista/imagenes/calendar.gif",
        buttonImageOnly: true,
        minDate: +1,
        showAnim: "blind"
    });
    $("#pacNacimiento").datepicker({
        dateFormat: "yy-mm-dd",
        changeMonth: true,
        changeYear: true,
        showOn: "button",
        buttonImage: "Vista/imagenes/calendar.gif",
        buttonImageOnly: true,
        maxDate: 0
    });
});

$(document).ready(function () {

    $("#clave").focus(function () {
        $("#pass_info").removeAttr("hidden");
        $("#clave").keyup(function () {
            $("#pass_info").html(validatePwd($("#clave").val()));
            $("#ver_info").html(verifyPwd($("#clave").val()));
        });
    }).blur(function () {
        $("#pass_info").prop("hidden", true);
    });

    $("#clave2").focus(function () {
        $("#ver_info").html(verifyPwd($("#clave").val()));
    }).keyup(function () {
        $("#ver_info").html(verifyPwd($("#clave").val()));
    }).blur(function () {
        $("#ver_info").prop("hidden", true);
    });

    $('#email').keyup(function () {
        $("#info_email").html(validateEmail($("#email").val()));
    }).blur(function () {
        $("#info_email").prop("hidden", true);
    }).focus(function () {
        $("#info_email").html(validateEmail($("#email").val()));
    }).click(function () {
        $("#info_email").html(validateEmail($("#email").val()));
    });

    function validateEmail(email) {
        if (email.indexOf('@', 0) === -1 || email.indexOf('.', 0) === -1) {
            $("#info_email").removeAttr("hidden");
            return "El email no es valido";
        } else {
            $("#info_email").prop("hidden", true);
            return "";
        }
    }

    function validatePwd(pwd) {

        if (pwd.length > 5) {
            $("#long").removeClass("invalid").addClass("valid");
        } else {
            $("#long").removeClass("valid").addClass("invalid");
        }

        if (pwd.match(/[a-z]/)) {
            $("#minus").removeClass("invalid").addClass("valid");
        } else {
            $("#minus").removeClass("valid").addClass("invalid");
        }

        if (pwd.match(/[A-Z]/)) {
            $("#mayus").removeClass("invalid").addClass("valid");
        } else {
            $("#mayus").removeClass("valid").addClass("invalid");
        }

        if (pwd.match(/\d/)) {
            $("#num").removeClass("invalid").addClass("valid");
        } else {
            $("#num").removeClass("valid").addClass("invalid");
        }
    }

    function verifyPwd(pwd) {
        if (pwd === "" || pwd !== $("#clave2").val()) {
            $("#ver_info").removeAttr("hidden");
            return "Contraseñas no son iguales";
        } else {
            $("#ver_info").prop("hidden", true);
            return "";
        }
    }
});