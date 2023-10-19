<?php

if (isset($_POST['btn']) && isset($_POST['Codigo'])){
    include("conexion.php");

    $Codigo=$_POST['Codigo'];
    $Nombre=$_POST['Nombre'];
    $Presentacion=$_POST['Presentacion'];
    $Peso=$_POST['Peso'];

    $query = "INSERT INTO
            productos(Codigo, Nombre, Presentacion, Peso)
            VALUES('$Codigo', '$Nombre', '$Presentacion', '$Peso')";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Se inserto el producto en la Base de Datos a la tabla correspondiente");
        echo "<a href='frmproductos.php'>Volver</a>";
        
     } /*else {
        echo("Hay un error en la Consulta");
    }*/
}  
?>