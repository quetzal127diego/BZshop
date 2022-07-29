<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../bootstrap/bootstrap.min.css" type="text/css">
    <title>Document</title>
    
    <style>
		.tamaño{
			width:1000px;
			
			
		}
	</style>
    
</head>
<body>
    <div>
        <?php 
		include ('navbienvenida.html')
		?>
    </div>
	<br>
	<br>
	<br>
	<br>
	<center>
<div id="carouselExampleCaptions" class="carousel slide tamaño" data-bs-ride="false">
	<div class="carousel-indicators">
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="../imagenes/LogoBZ.jpeg"" class="style="width: 50% >
		<div class="carousel-caption d-none d-md-block">
		  <h5>esto es BZshop</h5>
		  <p>somos la mejor tienda de ropa</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="../imagenes/52.png" class="style="width: 100% >
		<div class="carousel-caption d-none d-md-block">
		  <h5>promociones</h5>
		  <p>ven con nosotros a comprar</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="../imagenes/clothes.jpg" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
		  <h5>moda de invierno y negro</h5>
		  <p>la mejoores ofertas</p>
		</div>
	  </div>
	</div>
	<button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
	  <span class="carousel-control-prev-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Previous</span>
	</button>
	<button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
	  <span class="carousel-control-next-icon" aria-hidden="true"></span>
	  <span class="visually-hidden">Next</span>
	</button>

  </div>
  </center> 
  <script src="../bootstrapjs/bootstrap.min.js"></script>
</body>
</html>
