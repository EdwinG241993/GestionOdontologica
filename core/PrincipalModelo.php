<?php

if ($requestAjax) {
    require_once '../core/configApp.php';
} else {
    require_once './core/configApp.php';
}

class PrincipalModel {

    protected function sweet_alert($datos) {
        if ($datos['Alerta'] == 'Simple') {
            $alerta = "
                <script>
                swal(
                '" . $datos['Titulo'] . "',
                '" . $datos['Texto'] . "',
                '" . $datos['Tipo'] . "'
                );
                </script>
                ";
        } elseif ($datos['Alerta'] == 'Recargar') {
            $alerta = "
                <script>
                swal({
                title: '" . $datos['Titulo'] . "',
                text: '" . $datos['Texto'] . "',
                type: '" . $datos['Tipo'] . "',
                confirmButtonText: 'Aceptar'
                }).then(function (){
                location.reload();
                });
                </script>
                ";
        } elseif ($datos['Alerta'] == 'Limpiar') {
            $alerta = "
                <script>
                swal({
                title: '" . $datos['Titulo'] . "',
                text: '" . $datos['Texto'] . "',
                type: '" . $datos['Tipo'] . "',
                confirmButtonText: 'Aceptar'
                }).then(function (){
                $('.needs-validation')[0].reset();
                });
                </script>
                ";
        }
        return $alert;
    }

}
