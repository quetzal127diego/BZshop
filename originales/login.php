<?php
$nombre = $_POST['Nombre_U'];
$contra = $_POST['Contra_U'];
$correo = $_POST['Correo_U'];

/*Si esta vacio el input*/

if(!empty($nombre)||!empty($contra)||!empty($correo))
{
    $host = "localhost";
    $dbusername = "root";
    $dbpassword = "";
    $dbname = "mydb";
}


?>