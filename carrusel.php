<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../BZshop/css/bootstrap.min.css">
    <title>Document</title>
    
    <style>
		.tamaño{
			width:500px;
		}
	</style>
    
</head>
<body>
    <div>
        <?php 
		include ('nav.html')
		
		?>
    </div>
	<br>
	<br>
	<br>
	<br>
<div id="carouselExampleCaptions" class="carousel slide tamaño" data-bs-ride="false">
	<div class="carousel-indicators">
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
	  <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
	</div>
	<div class="carousel-inner">
	  <div class="carousel-item active">
		<img src="../BZshop/BZLOGO.png" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
		  <h5>First slide label</h5>
		  <p>Some representative placeholder content for the first slide.</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="../BZshop/20220722_013633_0000.png" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
		  <h5>Second slide label</h5>
		  <p>Some representative placeholder content for the second slide.</p>
		</div>
	  </div>
	  <div class="carousel-item">
		<img src="../BZshop/20220722_014740_0000.png" class="d-block w-100" alt="...">
		<div class="carousel-caption d-none d-md-block">
		  <h5>Third slide label</h5>
		  <p>Some representative placeholder content for the third slide.</p>
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
  <script src="../BZshop/js/bootstrap.min.js"></script>
</body>
</html>