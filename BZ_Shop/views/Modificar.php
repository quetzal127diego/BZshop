<!doctype html>
<html lang="en">
  <head>
    <title>Modificar Producto</title>
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
              <a class="nav-link disabled" href="#">Agregar Productos</a>
              <a class="nav-link clr-blanco" href="AdminProd.php">Regresar</a>
              <a class="nav-link clr-blanco" href="../index.php">Inicio</a>
            </nav>

            <!-- Tabla select -->

            <div class="containar">
              <div align="center">              
                <h1 align="center">Productos actuales</h1>
                </div>
                <?php
            use MyApp\query\Select;
            require("../vendor/autoload.php");
            
            $query = new Select();

            $cadena = "SELECT 
              imagenes.link,
              productos.cve_prod,
              productos.nombre,
              productos.precio,
              productos.exitencia,
              productos.talla,
              productos.color,
              categoria.nom_cat,
              categoria_prenda.prenda,
              genero.genero
              FROM productos
              INNER JOIN imagenes ON productos.imagen = imagenes.cve_img
              INNER JOIN categoria ON productos.categoria = categoria.cve_cat
              INNER JOIN categoria_prenda ON productos.categoria_prenda = categoria_prenda.cve_pcat
              INNER JOIN genero ON productos.genero = genero.cve_gen";

            $tabla = $query->seleccionar($cadena);

            
            echo "<table class='table table-hover align='left'>
              <thead class='table-dark'>
              <tr>
              <th> ID_Producto</th>
              <th> Imagen</th>
              <th> Producto</th>
              <th> Precio</th>
              <th> Existencias</th>
              <th> Talla</th>
              <th> Color</th>
              <th> Categoria</th>
              <th> Tipo_Prenda</th>
              <th> Genero</th>
              <th> Modificar</th>
              </tr>
              </thead>
              <tbody>";

              foreach($tabla as $registros)
              {
                echo "<tr>";
                echo "<td> $registros->cve_prod</td>";
                echo "<td> $registros->link </td>";
                echo "<td> $registros->nombre </td>";
                echo "<td> $registros->precio </td>";
                echo "<td> $registros->exitencia </td>";
                echo "<td> $registros->talla </td>";
                echo "<td> $registros->color </td>";
                echo "<td> $registros->nom_cat </td>";
                echo "<td> $registros->prenda</td>";
                echo "<td> $registros->genero </td>";
                echo " <td><a href='ModPro.php?id=$registros->cve_prod' class='list-group-item list-group-item-action flex-column align-items-start'>
                      <small><img src='../src/img/editar.png' alt='' width='20px'></small>
                      </a>";
              echo "</td>
                    </tr>";
              }
              echo "</tbody>
              </table>";
              ?>
                </div>
            </div>

                
              <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
</body>
</html>