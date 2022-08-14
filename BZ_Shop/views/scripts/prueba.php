<?php 
    use MyApp\Query\Ejecuta;
    use MyApp\Query\Select;
    require("../../vendor/autoload.php");
    
    $query = new Select();
    $insert=new Ejecuta();

    extract($_POST);
    /*Insersion de datos del formulario paso 1*/

        $cadena="INSERT INTO persona(nombre,apellidos,tel_celular) VALUES
        ('$nombre','$apellidos','$numero')";
        $insert->ejecuta($cadena);

        /*Consulta para obtener el id de la persona que se acaba de insertar*/
        $consultarId="SELECT id_persona from persona where tel_celular = '$numero'";
        
        
        $id_p = $query->seleccionar($consultarId);
        