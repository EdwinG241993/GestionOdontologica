<!DOCTYPE html>
<html lang="es">
    <?php include './Vista/modulos/head.php'; ?>
    <body>
        <div id="contenedor">
            <?php
            require_once './Controlador/VistaControlador.php';

            $vista = new VistaControlador();
            $accion = $vista->ObtenerVistaCtr();

            if ($accion == "login" || $accion == "404") {
                if ($accion == "login") {
                    require_once './Vista/html/login-accion.php';
                } else {
                    require_once './Vista/html/404-accion.php';
                }
            } else {
                include './Vista/modulos/encabezado.php';
                include './Vista/modulos/menu.php';
                require_once $accion;
            }
            ?>
        </div>
            <script src="<?php echo SERVER; ?>Vista/js/script.js"></script>
        <script>
            $.material.init();
        </script>
    </body>
</html>


