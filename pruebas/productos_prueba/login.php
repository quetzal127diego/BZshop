<?php 
session_start();
    if($_POST){
        if (($_POST['usuario']=="develoteca")&&($_POST['contrasenia']=="12345")){
            $_SESSION['usuario']="develoteca";

                header("location:principal.php");
        }else{
            echo"<script>alert('usuario o contrasela incorrecta');</script>";
        }
    }
?>

<!doctype html>
<html lang="en">
  <head>
    <title>Login</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
            <form  action="login.php" method="post">
        User: <input Class="form-control" type="text" name="usuario"> <br>
        Constraseña: <input Class="form-control" type="password" name="contrasenia"><br>
        <button class="btn btn-success" type="submit">Entrar</button>
      </form>
            </div>
            <div class="col-md-4">
                
            </div>
            <div class="col-md-4">
                
            </div>
        </div>
   
    </div>
      
  </body>
</html>