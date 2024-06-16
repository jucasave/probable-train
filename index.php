<!doctype html>
<html lang="es" class="h-100">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Saavedra Villagomez Juan Carlos">
    <title>Agenda de Contactos</title>
    <link href="bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link href="custom.css" rel="stylesheet"></link>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.3/css/jquery.dataTables.min.css">

    <script src="https://kit.fontawesome.com/7dcd5f579b.js" crossorigin="anonymous"></script>

  </head>
  <body class="d-flex flex-column h-100">
    <header>
      <!-- Fixed navbar -->
      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
      <div class="container-fluid">
      <a class="navbar-brand" href="#">COlchoS</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
      <div class="collapse navbar-collapse" id="navbarCollapse">
        <ul class="navbar-nav me-auto mb-2 mb-md-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Inicio</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="http://127.0.0.1:5500/portafolio/index.html#portfolio">Portafolio</a>
          </li>
        </ul>
        <form class="d-flex" role="search">
          <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
          <button class="btn btn-outline-success" type="submit">Buscar</button>
        </form>
      </div>
      </div>
      </nav>
    </header>

    <!-- Begin page content -->
    <main class="flex-shrink-0">
      <div class="container">
        <h1 class="page-header text-center">Agenda de Contactos</h1>
        <div class="row">
          <div class="col-sm-12">
          <a href="#mostrarModal" class="btn btn-primary" data-bs-toggle="modal"><span class="fa fa-plus"></span> Nuevo</a>  
          
          <?php
            session_start();
            if(isset($_SESSION['message'])){
          ?>
              <div class="alert alert-success" style="margin-top: 20px;">
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                <?php echo $_SESSION['message']; ?>
              </div>
          <?php
            unset($_SESSION['message']);
            }
          ?>

          <table class="table table-bordered table-striped" id="TablaC" style="margin-top: 25px;">
            <thead>
              <th>ID</th>
              <th>Nombre</th>
              <th>Apellido</th>
              <th>Telefono</th>
              <th>Correo</th>
              <th>Direccion</th>
              <th>Acciones</th>
            </thead>
            <tbody>
              <?php
                include_once('conexion.php');
                $database = new ConectarDB();
                $db = $database->abrir();
                try {
                  $sql = 'SELECT * FROM personasp';
                  foreach($db->query($sql) as $row){
                ?>
                  <tr>
                    <td><?php echo $row['idPersona']?></td>
                    <td><?php echo $row['Nombre']?></td>
                    <td><?php echo $row['Apellido']?></td>
                    <td><?php echo $row['Telefono']?></td>
                    <td><?php echo $row['Correo']?></td>
                    <td><?php echo $row['Direccion']?></td>
                    <td><a href="#edit_<?php echo $row['idPersona']; ?>" class="btn btn-success btn-sm" data-bs-toggle="modal"><i class="fas fa-edit"></i> Editar</a>
                    <a href="#eliminar_<?php echo $row['idPersona']; ?>" class="btn btn-danger btn-sm" data-bs-toggle="modal"><i class="fas fa-trash-alt"></i> Eliminar</a></td>
                    <?php include('EditarEliminarModal.php'); ?>
                  </tr>
                <?php
                  }
                } catch (PDOException $e) {
                  echo 'Error con la conexion: '.$e->getMessage();
                } 
                $database->cerrar();
              ?>
            </tbody>
          </table>
          </div>
      </div>
    </main>

    <footer class="footer mt-auto py-3 bg-light">
    <div class="container">
    <span class="text-muted">Desarrollado por Carlos Saavedra.</span>
    </div>
    </footer>

    <?php include("mostrarModal.php"); ?>
    <script src="bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="//cdn.datatables.net/1.13.3/js/jquery.dataTables.min.js"></script>
  </body>
</html>

<script>
  $(document).ready( function () {
    $('#TablaC').DataTable();
} );
</script>


