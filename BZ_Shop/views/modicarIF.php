<?php
use MyApp\query\Ejecuta;
use MyApp\data\database;

require("../vendor/autoload.php");

if (!empty($_POST["btnmodifcar"])) 
{
    if (!empty($_POST["nombre"]) and !empty($_POST["precio"]) and !empty($_POST["existencia"]) and !empty($_POST["talla"]) and !empty($_POST["color"]))
    {

        $queryM = new Ejecuta();
        extract($_POST);

        $id=$_POST["id"];
        $nombre=$_POST["nombre"];
        $precio=$_POST["precio"];
        $existencia=$_POST["existencia"];
        $talla=$_POST["talla"];
        $color=$_POST["color"];
        $categoria=$_POST["categoria"];
        $categoria_prenda=$_POST["categoria_prenda"];
        $genero=$_POST["genero"];
        $imagen=$_POST["imagen"];


        $update = "UPDATE productos SET nombre='$nombre', precio='$precio', exitencia='$existencia', talla='$talla', color='$color', categoria=$categoria, categoria_prenda=$categoria_prenda, genero=$genero, imagen=$imagen WHERE cve_prod = $id";

        $consulta = $queryM->ejecuta($update);
        if ($consulta==1)
        {
            header("Location: /integradora/BZ_Shop/views/Modificar.php");
        }
        else
        {
            echo "<div class='alert alert-danger'> Error al modificar producto </div>";   
        }
    
    }else
    {
        echo "<div class='alert alert-warning'> Campos vacios </div>";   
    }
}
?>