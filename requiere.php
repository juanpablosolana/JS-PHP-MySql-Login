<?php
# Si no entiendes el código, primero mira a login.php

# Iniciar sesión para usar $_SESSION
session_start();
$json=array();

# Y ahora leer si NO hay algo llamado usuario en la sesión,
# usando empty (vacío, ¿está vacío?)
# Recomiendo: https://parzibyte.me/blog/2018/08/09/isset-vs-empty-en-php/
if (empty($_SESSION["usuario"])) {
    # Lo redireccionamos al formulario de inicio de sesión
   # header("Location: index.html");
    # Y salimos del script
    //echo json_encode(0);
        $json['status']='fail';
        $json['user']='fail';
        echo json_encode($json);
        exit();
    }
    // 
    else{

        $json['status']='ok';
        $json['user']=$_SESSION['usuario'];
        echo json_encode($json);
    }
    

