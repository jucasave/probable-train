<?php
    session_start();
    include_once('conexion.php');
    if (isset($_POST['edit'])) {
        $database = new ConectarDB();
        $db = $database->abrir();
        try {
            $id = $_GET['id'];
            $nombreC = $_POST['nombreContacto'];
            $apellidoC = $_POST['apellido'];
            $telefonoC = $_POST['telefono'];
            $emailC = $_POST['email'];
            $direccionC = $_POST['direccion'];

            $sql = "UPDATE personasp SET 
                    Nombre = '$nombreC', Apellido = '$apellidoC', Telefono = ' $telefonoC', Correo = '$emailC', Direccion = '$direccionC' 
                    WHERE idPersona = '$id'";
            $_SESSION['message'] = ($db->exec($sql)) ? 'Datos Actualizado Correctamente' : 'No se puede actualizar los datos'; 
        } catch (PDOException $e) {
            $_SESSION['message'] = $e->getMessage();
        }
        $database -> cerrar();
    } else {
        $_SESSION['message'] = 'Rellene el formulario';
    }
    header('location: index.php');
