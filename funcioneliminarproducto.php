<?php
include 'conexion.php';

$Codigo=$_GET['Codigo'];
$delete="DELETE FROM productos WHERE Codigo='$Codigo'";
$consulta= mysqli_query($conn, $delete);

if ($consulta){
    header("location: mostrarproductos.php");

}else{
    echo" <script> alert ('ha sucedido un error');
    location.href='mostrarproductos.php';
    /<script>";
}