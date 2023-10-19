<?php
include "conexion.php";
$Id = $_GET['Id'];
$query = "SELECT * FROM producciones WHERE Id=$Id";
$consulta = mysqli_query($conn, $query);
$vec = mysqli_fetch_array($consulta);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Actualizar Producción</title>

    <link rel="shortcut icon" href="IMG/logo2.jpg" type="image/x-icon">
    <link rel="shortcut icon" href="../IMG/LogoBorojo.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-color: #FAF0E6;">

    <!-- BARRA DE NAVEGACIÓN -->
    <?php
    include("Navbar.php");
    ?>

    <div class="container my-3">
        <div class="row">
            <div class="col-sm-12 col-md-4 col-lg-4 col-xl-4">
                <h2 class="centrado">Actualizar Producción</h2>

                <form action="funcionactproduccion.php" method="post">

                    <div class="form-group">
                        <label for="id">Id:</label>
                        <input type="number" name="Id" id="id" value="<?php echo $vec[0] ?>" class="form-control" readonly autofocus>
                    </div>
                    <div class="form-group">
                        <label for="fecha">Fecha:</label>
                        <input type="date" name="Fecha" id="fecha" value="<?php echo $vec[1] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <label for="cantidad">Cantidad:</label>
                        <input type="number" name="Cantidad" id="cantidad" value="<?php echo $vec[2] ?>" class="form-control" required>
                    </div>
                    <div class="form-group">
                        <select class="form-select" aria-label="Default select example" name="Tipoproducto" required>
                            <option value="<?php echo $vec[3] ?>"></option>
                            <option selected>Tipo Producto</option>
                            <option value="1">Caramelo</option>
                            <option value="2">Mermelada</option>
                            <option value="3">Bocadillo</option>
                        </select>
                    </div>

                    <div class="d-grid gap-2 col-7 mx-auto">
                        <button class="btn btn-success" type="submit" name="btn">Actualizar</button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/c36cb32bff.js" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>