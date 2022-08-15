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
		background-size: 1000vw 1000vh;
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
              <a class="nav-link disabled" href="#">Agregar Productos</a>
              <a class="nav-link clr-blanco" href="AdminProd.php">Regresar</a>
              <a class="nav-link clr-blanco" href="../index.php">Inicio</a>

            </nav>

            <div class="container" style="width: 40%;">
                <br><br>
                <div class="mb-3">
                  <h1>Registro del producto</h1><br>
                  <form action="../views/scripts/GuardarProductos.php" method="POST" enctype="multipart/form-data">
                  <label for="nombre" class="form-label"><strong>Nombre</strong></label>
                  <input type="text" name="nombre" id="nombre" class="form-control" placeholder="Escribe el nombre del producto aqui">
                </div>
                <div class="mb-3">
                  <label for="color" class="form-label"><strong>Imagen del Producto</strong></label>
                  <input type="file" name="imagen" id="imagen" class="form-control">
                </div>
                <div class="mb-3">
                  <label for="precio" class="form-label"><strong>Precio</strong></label>
                  <input type="text" name="precio" id="" class="form-control" placeholder="Escribe el precio del producto aqui">
                </div>
                <div class="mb-3">
                  <label for="existencia" class="form-label"><strong>Existencia</strong></label>
                  <input type="text" name="existencia" id="" class="form-control" placeholder="Escribe el existencia del producto aqui">
                </div>
                <div class="mb-3">
                  <label for="talla" class="form-label"><strong>Talla</strong></label>
                  <input type="text" name="talla" id="" class="form-control" placeholder="Escribe la talla del producto aqui">
                </div>
                <div class="mb-3">
                  <label for="color" class="form-label"><strong>Color</strong></label>
                  <input type="text" name="color" id="" class="form-control" placeholder="Escribe el color del producto aqui">
                </div>
                
               <!--Campo con consulta para la categoria -->
                <?php 
              use MyApp\Query\Select;
              require("../vendor/autoload.php");
              $queryS=new Select();
              $cadena="SELECT categoria.cve_cat,categoria.nom_cat from categoria";
              $reg=$queryS->seleccionar($cadena);
              
              echo "  
              <label for='categoria' class='form-label'>
                <strong>Tipo</strong>
              </label>
              <select name='categoria' class='nav-item dropdown  form-select  quitar-borde'>
              <option selected> </option>";

              foreach($reg as $value)
              {
                echo "<option class='dropdown-item ' value='".$value->cve_cat."'>".$value->nom_cat."</option> ";
              }
              echo "</select>";
            ?>
            <br>
            <!--Campo con consulta para la categoria_prenda -->
                <?php 
              require("../vendor/autoload.php");
              $queryS=new Select();
              $cadena="SELECT categoria_prenda.cve_pcat,categoria_prenda.prenda from categoria_prenda";
              $reg=$queryS->seleccionar($cadena);
              
              echo "  
              <label for='nombre' class='form-label'><strong>Categoria</strong></label>
              <select name='categoria_prenda' class='nav-item dropdown  form-select  quitar-borde'>
              <option selected> </option>";

              foreach($reg as $value)
              {
                echo "<option class='dropdown-item' value='".$value->cve_pcat."'>".$value->prenda."</option> ";
              }
              echo "</select>";
            ?>
            <br>
            <!--Campo con consulta para el genero-->
             <?php 
              require("../vendor/autoload.php");
              $queryS=new Select();
              $cadena="SELECT genero.cve_gen, genero.genero FROM genero";
              $reg=$queryS->seleccionar($cadena);
              
              echo "  
              <label for='genero' class='form-label'><strong>Genero</strong></label>
              <select name='genero' class='nav-item dropdown  form-select  quitar-borde'>
              <option selected> </option>";

              foreach($reg as $value)
              {
                echo "<option class='dropdown-item' value='".$value->cve_gen."'>".$value->genero."</option> ";
              }
              echo "</select>";
            ?>
           <br>
                <div class="container-fluid h-100"> 
    		<div class="row w-100 align-items-center">
    			<div class="col text-center">
    				<button class="btn btn-primary regular-button">Guardar</button>
    			</div>	
    		</div>
        </form>
              <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>