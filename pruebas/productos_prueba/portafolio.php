<?php include('pagadmin.php')?>
  

    <div class="container">
        <div class="row">
            <div class="col-md-6">
            <div class="card">
        <div class="card-header">
            Datos del producto
        </div>
        <div class="card-body">
        <form action="portafolio.php" method="post">
        Nombre del producto: <input class="form-control" type="text" name="nombre">
        <br>
        Imagen del producto: <input class="form-control" type="file" name="archivo">
        <br>
        <input class="btn btn-success" type="submin" value="Enviar proyecto">
    </form>
        </div>

    </div>
            </div>
            <div class="col-md-6">
            <table class="table">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nombre</th>
                <th>Imagen</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td >3</td>
                <td>prod</td>
                <td>imagen</td>
            </tr>
        </tbody>
    </table>
            </div>
            
            
        </div>
    </div>
    
    
    
<?php include('pie.php')?>