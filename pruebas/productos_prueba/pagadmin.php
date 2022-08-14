<?php
session_start();
if( isset($_SESSION['usuario'])!="develoteca"){
    header("location:login.php");
}  
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=a, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../Aprendiendo/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <a href="principal.php">INICIO |</a>
        <a href="portafolio.php">PORTAFOLIO |</a>
        <a href="cerrar.php">CERRAR |</a>
    
    