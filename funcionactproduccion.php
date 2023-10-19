<?php

    include("conexion.php");

    $Id=$_POST['Id'];
    $Fecha=$_POST['Fecha'];
    $Cantidad=$_POST['Cantidad'];
    $Tipoproducto=$_POST['Tipoproducto'];

    $query = "UPDATE producciones
            SET Fecha= '$Fecha', Cantidad='$Cantidad', Tipoproducto = '$Tipoproducto'
            WHERE Id= '$Id'";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Registro actualizado");
        echo "<a href='mostrarproduccion.php'>Volver a mostrar Producción</a>";
    } else {
        echo("Hay un error en la Actualización");
    }

?>