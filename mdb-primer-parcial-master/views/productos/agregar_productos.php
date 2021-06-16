<!DOCTYPE html>
<html lang="es-MX">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agregar Productos</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container">
<div class="col-sm-6 offset-3 mt-5">
<form action="../../includes/_functions_productos.php" method="POST">
<div class="mb-3">
<label for="producto" class="form-label">producto *</label>
<input type="text"  id="producto" name="producto" class="form-control">
</div>

<div class="row">
<div class="col-sm-6">
<div class="mb-3">
<label for="precio" class="form-label">precio *</label>
<input type="hidden"  id="precio" name="precio" class="form-control">
</div>
</div>



<div class="mb-3">
<button type="submit" class="btn btn-success">Guardar</button>


</div>

</form>
</div>
</div>
</body>
</html>