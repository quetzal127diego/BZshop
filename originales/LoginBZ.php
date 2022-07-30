<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="CssLogin.css">
    <link rel="icon" href="../imagenes/LOGOSIPNG.png">
  </head>

<body class="bodylogin">

<div>
<?php 
		include ('nav.html')
		
		?>
</div>
    <div class="login-box">
        <h2>Iniciar sesion</h2>
        <center>
        <img src="/integradora/imagenes/LOGOSIPNG.png" id="imagenLOGO">
        </center>
        <form action="login.php" method="post">
          <div class="user-box">
            <input type="text" name="Nombre_u" required="">
            <label>Correo</label>
          </div>
          <div class="user-box">
            <input type="password" name="Contra_U" required="">
            <label>Contraseña</label>
          </div>
          <div class="user-box">
            <input type="email" name="Correo_U" required="">
            <label>Correo</label>
          </div>
          <a href="#">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Iniciar
          </a>
          <a href="../originales/registroBZ.html">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            registro
          </a>
        </form>
      </div>
</body>
</html>
