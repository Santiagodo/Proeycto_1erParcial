<!DOCTYPE html>
<html lang="en">
<?php require '../../includes/_db.php' ?>
<?php require '../../includes/_header.php' ?>


<div id= "content">
        <section>
        <div class="container mt-5">
<div class="row">
<div class="col-sm-12 mb-3">
<center><h1>Productos</h1></center>
</div>
<div class="col-sm-12">
<div class="table-responsive">


<table class="table table-striped table-hover">
<thead>

<tr>
<th>Producto</th>
<th>Precio</th>
<th>Acciones</th>


</tr>

</thead>

<tbody>

<?php

$sql = "SELECT id, producto, precio,  FROM productos";
$productos = mysqli_query($conexion, $sql);
if($productos -> num_rows > 0){
foreach($productos as $key => $row ){




?>

<tr>
<td><?php echo $row['producto']; ?></td>
<td><?php echo $row['precio']; ?></td>
<td>
  <a href="editar_producto.php?id=<?php echo $row['id']?>">
    <div">
      Editar
    </div>
  </a>
  <a>|</a>
  <a href="eliminar_producto.php?id=<?php echo $row['id']?>">
    <div">
    Eliminar
    </div>
  </a>
</td>
</tr>


<?php
}
}else{

    ?>
    <tr class="text-center">
    <td colspan="4">No existen productos </td>
    </tr>

    <?php
}?>
</tbody>

</table>
</div>
</div>
</div>
</div>
        </section>


        <section>
            <div class= "container">
                <div class= "row">
                    <div class= "col-lg-9">
            </div>
        </section>
    </div>
    <?php require '../../includes/_footer.php' ?>
</html>