<!DOCTYPE html>
<html lang="es">
    <?php include './view/modules/head.php'; ?>
    <body>
        <div id="contenedor">
            <?php
            require_once './controller/ViewController.php';

            $view = new ViewController();
            $action = $view->getViewCtr();

            if ($action == "login" || $action == "404") {
                if ($action == "login") {
                    require_once './view/html/login-action.php';
                } else {
                    require_once './view/html/404-action.php';
                }
            } else {
                include './view/modules/encabezado.php';
                include './view/modules/menu.php';
                require_once $action;
            }
            ?>
        </div>
            <script src="<?php echo SERVER; ?>Vista/js/script.js"></script>
        <script>
            $.material.init();
        </script>
    </body>
</html>


