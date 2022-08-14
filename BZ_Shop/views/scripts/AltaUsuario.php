
<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.2.0-beta1 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css"  integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

  </head>
  <body>
  <?php 
    use MyApp\Query\Ejecuta;
    use MyApp\Query\Select;
    require("../../vendor/autoload.php");
    
    $query = new Select();
    $insert=new Ejecuta();

    extract($_POST);
    /*Insersion de datos del formulario paso 1*/
    try 
    {   

        $cadena="INSERT INTO persona(nombre,apellidos,tel_celular) VALUES
        ('$nombre','$apellidos','$numero')";
        $insert->ejecuta($cadena);
        
        $SacarNum="SELECT persona.tel_celular FROM persona";
        $CompararNum = $query -> seleccionar($SacarNum);
        /*Validacion de datos para pase a paso 2 del registro*/
        if(!empty($nombre && $apellidos && $numero))
        {
            header("location: ../FormRegistroP2.php");
  
        }
        /*Mensaje de error para el usuario en caso de datos vacios y redireccion a FormRegistroP1.php */
        else
        {
            echo "<div class='alert alert-danger' role='alert' style='text-align: center;'><strong>Error: 
              Campos vacios o ya registrados</strong></div>";
            header("refresh:3; ../FormRegistroP1.php");
        }
    }
    /*Impresion de error en caso de error y redireccion a FormRegistroP1.php */
    catch (PDOException $e)
    {
        echo "<div class='alert alert-danger' role='alert' style='text-align: center;'><strong>Error: Algo salio mal: " . $e->getMessage() ."</strong></div>";
        echo "<a href='../FormRegistroP1.php> Intentalo de nuevo</a>";
    }

    
    
?>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-kjU+l4N0Yf4ZOJErLsIcvOU2qSb74wXpOhqTvwVx3OElZRweTnQ6d31fXEoRD1Jy" crossorigin="anonymous"></script>
  </body>
</html>