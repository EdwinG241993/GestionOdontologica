<?php

/**
 * @author Edwin
 */

if($result->num_rows==1){
    $fila = $result->fetch_object();
    if ($fila->UsuUsuario == $usu && $fila->UsuPassword == $pass) {
        echo "<script> window.location.href='index.php?accion=inicio'; </script>";
    }else {
        echo 'Error de usuario o contraseña';
    }
}else {
    echo "Error de usuario o contraseña";
}

?>