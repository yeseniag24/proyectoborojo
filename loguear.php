<?php

if (isset($_POST['btn'])) {
  
    $doc  = $_POST['doc'];
    $clave= $_POST['clave'];
    include 'Conexion.php';
    $q="SELECT * FROM usuarios 
        WHERE Documento='$doc' and Contraseña='$clave'";
    $c=mysqli_query($conect,$q);
    if (mysqli_num_rows($c)==1){
        $v=mysqli_fetch_array($c);
        session_start();
        $_SESSION['Documento00']=$v[0];
        $_SESSION['Nombre']=$v[1];
        $_SESSION['Apellido']=$v[2];
        $_SESSION['Ocupacion']=$v[3];
        if ($v['Rol']==1) {
            echo "<script>alert('Bienvenido Administrador');
                          window.location.href='index.php';</script>";
        }else if ($v['Rol']==2) {
            echo "<script>alert('Bienvenido Usuario');
                          window.location.href='';</script>";
        }else{
        echo "<script>alert('Usuario o contraseña incorrecto!');
                      window.location.href='BuscarServicio.php';</script>";
        }
    }
}
?>