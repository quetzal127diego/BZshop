<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <style>
        
        @import url('https://fonts.googleapis.com/css?family=Montserrat|Montserrat+Alternates|Poppins&display=swap');
    *{
		margin: 0;
		padding: 0;
		box-sizing: border-box;
		font-family: 'Montserrat Alternates', sans-serif;
	}
    
	body
    {
		background-color:background: #808080;
        background: -moz-linear-gradient(top, #808080 0%, #B3B3B3 50%, #C5C5C5 100%);
        background: -webkit-linear-gradient(top, #808080 0%, #B3B3B3 50%, #C5C5C5 100%);
        background: linear-gradient(to bottom, #808080 0%, #B3B3B3 50%, #C5C5C5 100%);;
		background-size: 100vw 100vh;
		background-repeat: no-repeat;
	}
    .fondo
    {
        background-color:background: #808080;
        background: -moz-linear-gradient(top, #808080 0%, #B3B3B3 50%, #C5C5C5 100%);
        background: -webkit-linear-gradient(top, #808080 0%, #B3B3B3 50%, #C5C5C5 100%);
        background: linear-gradient(to bottom, #808080 0%, #B3B3B3 50%, #C5C5C5 100%);;
		background-size: 100vw 100vh;
		background-repeat: no-repeat;
    }
    .clr-blanco
    {
        color:white;
    }
    .borde
    {
        border: border-solid;
        border-color:black;
        border-radius:5px;
    }
    </style>
  </head>
  <body>
            <nav class="nav justify-content-center navbar-dark bg-dark ">
              <a class="nav-link disabled" href="#">Modificar Productos</a>
              <a class="nav-link clr-blanco" href="../index.php">Inicio</a>
            </nav>
    <div class="container ">
            <h4></h4>
            <div class="list-group ">
                <br><br>
                <h4><strong>Productos</strong></h4>
                <hr>
                <div class="list-group ">
                <?php
                    use MyApp\Query\Select;
                    require("../vendor/autoload.php");
                    
                    $query = new Select();
        
                    $cadena = "SELECT productos.nombre as nomprod, productos.precio, productos.exitencia, productos.talla, categoria_prenda.prenda, categoria.nom_cat from productos JOIN categoria_prenda 
                    on categoria_prenda.cve_pcat=productos.categoria_prenda join categoria on productos.categoria=categoria.cve_cat join genero on productos.genero=genero.cve_gen";
        
                    $tabla = $query->seleccionar($cadena);
        
                      foreach($tabla as $registros)
                      {
                        echo "<a href='AgregarProductos.php' class='list-group-item list-group-item-action flex-column align-items-start'>
                        <div class='d-flex w-100 justify-content-between'>";
                        echo "<h5 class='mb-1'> $registros->nomprod</h5>";
                        echo "<h7 class='mb-1'>$registros->nomprod</h7>";
                        echo "<h8 class='mb-1'>$registros->precio</h8>";
                        echo "<h8 class='mb-1'>"."$registros->prenda"."</h8>";
                        echo "<small>Existencia: "."$registros->exitencia"."</small>";
                        echo "<small>Talla: "." $registros->talla"."</small>";
                        echo " </div> <p class='mb-1'>Click aqui para modificar el producto</p>";
                      }
                    

                ?>

                
                </div>
                
            </div>
            <hr>
        </div>
        

    </div>
    

    
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>