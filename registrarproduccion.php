<?php

    include("conexion.php");

    
    $Fecha=$_POST['Fecha'];
    $Cantidad=$_POST['Cantidad'];
    $Tipoproducto=$_POST['Tipoproducto'];


    $query = "INSERT INTO
            producciones(Fecha, Cantidad, Tipoproducto)
            VALUES('$Fecha', '$Cantidad', '$Tipoproducto')";
    $consulta = mysqli_query($conn, $query);

    if ($consulta) {
        echo ("Se inserto la producción en la Base de Datos a la tabla correspondiente");
        echo "<a href='frmproducciones.php'>Volver</a>";
    }else {
        echo("Hay un error en la Consulta");
    }
 
?>
