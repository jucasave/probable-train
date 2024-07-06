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
  
    <link rel="stylesheet" href="https://cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css">
  </head>
  <body>
     <!-- SECCION I N I C I O -->
     <section id="inicio">
        <div class="contenido">
            <header>
                <div class="contenido-header">
                    <h1>COlchoS</h1>
                    <nav id="nav" class="">
                        <ul id="links">
                            <li><a href="http://127.0.0.1:5500/index.html#inicio" >PORTFOLIO</a></li>
                        </ul>
                    </nav>

                    <!-- Icono del menu responsive -->
                    <div id="icono-nav" onclick="responsiveMenu()">
                        <i class="fa-solid fa-bars"></i>
                    </div>

                    
                </div>
            </header>
            </section>

    <!-- Begin page content -->
     <section id="agenda">
     <div class="container">
        <h1>Agenda de Contactos</h1>
       
          <a href="#mostrarModal" class="btn" data-bs-toggle="modal"> <span class="fa fa-plus"></span>Nuevo</a>  
          
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

             <table class="table table-bordered border border-white" id="TablaC"  >
            <thead class="table-dark">
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
                  $sql = 'SELECT * FROM personas';
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
    </main>
    </section>

    <footer id="footer">
    <h2>Desarrollado por Carlos Saavedra.</h2>
    <div class="redes">
     <a href="https://wa.me/525534019300"><i class="fa-brands fa-whatsapp" style="color: #63E6BE;"></i></a>
     <a href="https://www.facebook.com/profile.php?id=100076334268624"><i class="fa-brands fa-facebook" style="color: #0c00b6;"></i></a>
     <a href="https://www.instagram.com/carlossaavedra_jv/"><i class="fa-brands fa-instagram-square" style="color: #d8206d;"></i></a>
    </div>
    </footer>
  

    <?php include("mostrarModal.php"); ?>
    <script src="bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.4.js" integrity="sha256-a9jBBRygX1Bh5lt8GZjXDzyOB+bWve9EiO7tROUtj/E=" crossorigin="anonymous"></script>
    <script src="https://cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script src="https://kit.fontawesome.com/7dcd5f579b.js" crossorigin="anonymous"></script>  
  </body>
</html>

<script>
  $(document).ready( function () {
    $('#TablaC').DataTable();
} );
</script>



