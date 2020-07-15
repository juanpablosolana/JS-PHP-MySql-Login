<?php
session_start();
$json=array();


if (empty($_SESSION["usuario"])) {

        $json['status']='fail';
        $json['user']='fail';
        echo json_encode($json);
        exit();
    }
    else{

        $json['status']='ok';
        $json['user']=$_SESSION['usuario'];
        echo json_encode($json);
    }
    

