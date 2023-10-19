<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Compras</title>
  <!-- Bootstrap CSS -->
  <link rel="shortcut icon" href="../IMG/LogoBorojo.png" type="image/x-icon">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.1.3/dist/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>

<body class="p-3 m-0 border-0 bd-example" style="background-color: #FAF0E6;">

  <!-- Barra de Navegación -->
  <?php
  include "Navbar.php";
  ?>

  <div class="container">
    <br>
    <h1>Registrar Compras</h1>
    <form action="" method="post">
    <div class="col-md-6">
          <label for="Insumos">Tipo de Insumos</label>
          <select name="Insumos" id="IdInsumos">
            <option value="tecnicos">Mobiliario</option>
            <option value="aseo">Aseo</option>
            <option value="materia prima">Materia prima</option>
          </select>
        </div>
      <div class="row">
        <div class="col-md-8">
          <input type="number" class="form-control" placeholder="Id" name="Id">
        </div>
        <br>
        <br>
        <div class="col-md-8">
          <input type="number" class="form-control" placeholder="Factura" name="Factura">
        </div>
        <br>
        <br>
        <div class="col-md-8">
          <input type="number" class="form-control" placeholder="Cantidad" name="Cantidad">
        </div>
        <br>
        <br>
        <div class="col-md-8">
          <input type="textarea" class="form-control" placeholder="Observaciones" name="Observacion">
        </div>
        <br>
        <br>
        <div class="col-md-8">
          <input type="text" class="form-control" placeholder="Proveedor" name="Proveedor">
        </div>
        <br>
        <br>
        <div class="col-12">
          <button type="submit" class="btn btn-success">Enviar</button>
        </div>


        <!-- jQuery first, then Popper.js, then Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/c36cb32bff.js" crossorigin="anonymous"></script>
        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>

</html>