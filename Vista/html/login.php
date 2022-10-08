<!DOCTYPE html>

<html>
    <head>
        <meta charset="UTF-8">
        <title>Sistema de Gestion Odontologica</title>
        <link rel="stylesheet" type="text/css" href="Vista/css/estilos.css"/>
    </head>
    <body>
        <div id="contenedor">
            <div id="encabezado">
            </div>
            <div id="contenido">
                <h2>Login Gestion Odontologica</h2>
                <form action="index.php?accion=iniciarSesion" method="POST" autocomplete="off">
                    <div>
                        <label>Usuario:</label>
                        <div>
                            <input type="text" id="login_usuario" name="login_usuario" pattern="[a-zA-Z0-9]{4,20}" maxlength="20" required >
                        </div>
                    </div>

                    <div>
                        <label>Clave:</label>
                        <div>
                            <input type="password" id="login_clave" name="login_clave" maxlength="100" required >
                        </div>
                    </div>
                    <br>
                    <div>
                        <button type="submit">Iniciar sesion</button>
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
