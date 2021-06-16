<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions_productos.php" method="POST">
<div class="mb-3">
<label for="producto" class="form-label">Producto *</label>
<input type="text"  id="producto" name="producto" class="form-control">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">Precio *</label>
<input type="precio"  id="precio" name="precio" class="form-control">
</div>
</div>
<input type="hidden" name="accion" value="insertar_productos">
</div>

<div class="mb-3">
<button type="submit" class="btn btn-success">Guardar</button>

<?php   
        $conexion=mysqli_connect("localhost","root","","tienda_unid");
?>
<form name="form" action="" method="post" enctype="multipart/form-data">
<input type="text" name="producto" autocomplete="off" required value="">
<strong>Seleccionar imagen</strong><br><br>
<button type="submit"><strong>Aceptar</strong></button>
</form>

</div>

</form>
</div>
</div>
</body>
</html>