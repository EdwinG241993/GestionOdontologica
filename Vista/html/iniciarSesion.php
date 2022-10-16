<?php

/**
 * @author Edwin
 */

if($result->num_rows==1){
    $fila = $result->fetch_object();
    if ($fila->UsuUsuario == $usu && password_verify($pass, $fila->UsuPassword)) {
        echo "<script> window.location.href='index.php?accion=inicio'; </script>";
    }else {
        echo password_verify($pass, $fila->UsuPassword);
        echo 'Error de usuario o contraseña';
    }
}else {
    echo ($result->num_rows==1);
    echo "Error de usuario o contraseña";
}

?>