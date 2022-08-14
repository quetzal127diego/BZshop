<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap.min.css" type="text/css">
    <script src="../js/bootstrap.min.js"></script>
    <title>VerProducto</title>
</head>
<body>
    <?php
            use bzshop\Data\Database;
            use bzshop\Query\Select;
            
            require("../vendor/autoload.php");
            
            $query = new Select();

            $cadena = "SELECT imagenes.link as Imagen,
                productos.nombre as Producto,
                productos.precio as Precio ,
                productos.exitencia as Existencias, 
                productos.talla as Talla, 
                productos.color as Color, 
                categoria.nom_cat as Categoria,
                categoria_prenda.prenda as Tipo_Prenda,
                genero.genero as Genero
                FROM productos
                INNER JOIN imagenes ON productos.imagen = imagenes.cve_img
                INNER JOIN categoria ON productos.categoria = categoria.cve_cat
                INNER JOIN categoria_prenda ON productos.categoria_prenda = categoria_prenda.cve_pcat
                INNER JOIN genero ON productos.genero = genero.cve_gen";

            $tabla = $query->seleccionar($cadena);

            
            echo "<table class='table table-hover>
              <thead class='table-dark'>
              <tr>
              <th> Imagen</th>
              <th> Producto</th>
              <th> Precio</th>
              <th> Existencias</th>
              <th> Talla</th>
              <th> Color</th>
              <th> Categoria</th>
              <th> Tipo_Prenda</th>
              <th> Genero</th>
              </tr>
              </thead>
              <tbody>";

              foreach($tabla as $registros)
              {
                echo "<tr>";
                echo "<td> $registros->Imagen </td>";
                echo "<td> $registros->Producto </td>";
                echo "<td> $registros->Precio </td>";
                echo "<td> $registros->Existencias </td>";
                echo "<td> $registros->Talla </td>";
                echo "<td> $registros->Color </td>";
                echo "<td> $registros->Categoria </td>";
                echo "<td> $registros->Tipo_Prenda </td>";
                echo "<td> $registros->Genero </td>";
                echo "</tr>";
              }

              echo "</tbody>
              </table>";
              ?>
</body>
</html>