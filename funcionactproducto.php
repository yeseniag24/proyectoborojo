<?php

if (isset($_POST['btn']) && isset($_POST['Codigo'])){
    include("conexion.php");

    $Codigo=$_POST['Codigo'];
    $Nombre=$_POST['Nombre'];
    $Presentacion=$_POST['Presentacion'];
    $Peso=$_POST['Peso'];

    $query = "UPDATE productos
            SET Codigo= '$Codigo', Nombre= '$Nombre', Presentacion='$Presentacion', Peso='$Peso'
            WHERE Codigo=$Codigo";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='mostrarproductos.php'>Volver a mostrar Productos</a>";
    }else {
        echo("Hay un error en la Actualización");
    }
}  else{
    echo "ir al formulario";
    echo "<a href='funcionactproducto.php'>Volver</a>";
}
?>