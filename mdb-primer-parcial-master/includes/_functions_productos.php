<?php

require_once ("_db.php");


if(isset($_POST['accion'])){ 
    switch($_POST['accion']){
        case 'editar_producto';
        editar_producto();

        break;

        case 'insertar_producto';
        insertar_producto();

        break;
        case 'eliminar_producto';
        eliminar_producto();

        break;

    }

}

function insertar_producto(){

    global $conexion;
    extract($_POST);


    $consulta="INSERT INTO productos (producto, precio)
    VALUES ('$producto', '$precio');" ;

    mysqli_query($conexion, $consulta);
    
    header("Location: ../views/productos/");


}
function editar_producto(){

    global $conexion;
    extract($_POST);

    $consulta="UPDATE productos SET producto = '$producto', precio = '$precio' 
    WHERE id = $id";

   mysqli_query($conexion, $consulta);
    
   header("Location: ../views/productos/");



}



function eliminar_producto(){

    global $conexion;
    extract($_POST);
    $id = $_POST['id'];
    $consulta = "DELETE FROM productos WHERE id = $id";
    mysqli_query($conexion, $consulta);
    header("Location: ../views/productos/");
}

?>