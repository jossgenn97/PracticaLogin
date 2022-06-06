<?php

$host="localhost";
$db="login";
$usuario="root";
$password="";

try {
    $conexion = new PDO("mysql:host=$host;dbname=$db",$usuario,$password);
    if($conexion){
        echo "CONECTADO A LA BASE DE DATOS";
    }
} catch (Exception $ex) {
    echo $ex->getMessage();
}

?>