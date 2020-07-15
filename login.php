<?php

        $usuario = $_POST['usuario'];
        $password = $_POST['password'];
        $json=array();
        
if ($usuario==="" || $password===""){
    echo json_encode('0');
}
else
        $usuariobd = "root";
        $passwordbd = "";
        $servidor = "localhost";
        $basededatos = "cotizaciones";
        // creación de la conexión a la base de datos con mysql_connect()
        $conexion = mysqli_connect( $servidor, $usuariobd,$passwordbd ) or die ('echo json_encode("0")');
        // Selección del a base de datos a utilizar
        $db = mysqli_select_db( $conexion, $basededatos ) or die ("Upps! Pues va a ser que no se ha podido conectar a la base de datos" );
        // establecer y realizar consulta. guardamos en variable.
        $consulta = "select * from cotizaciones.usuarios where Usuario = '$usuario' and password = '$password'";
        $resultado = mysqli_query( $conexion, $consulta ) or die( "Algo ha ido mal en la consulta a la base de datos");

     $count=mysqli_num_rows($resultado);

if($count =='1')
{
       // $_SESSION['username'] = $usuario;
//         $_SESSION['loggedin'] = true;
//     $_SESSION['username'] = $usuario;
//     $_SESSION['start'] = time();
//     $_SESSION['expire'] = $_SESSION['start'] + (5 * 60);
session_start();
 $_SESSION["usuario"] = $usuario;
        $json['status']='ok';
        $json['user']=$usuario;
        echo json_encode($json);
}
else {
        $json['status']='fail';
        $json['user']='fail';
        echo json_encode($json);}

// print_r($_SESSION());
