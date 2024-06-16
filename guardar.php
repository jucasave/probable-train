<?php
    session_start();
    include_once('conexion.php');
    if (isset($_POST['guardar'])) {
        $database = new ConectarDB();
        $db = $database->abrir();
        try {
            $stmt = $db->prepare("INSERT INTO personasp (Nombre, Apellido, Telefono, Correo, Direccion)
                                    VALUES (:nombreContacto, :apellido, :telefono, :email, :direccion)");
            $_SESSION['message'] = ($stmt->execute(array(':nombreContacto' => $_POST['nombreContacto'],
                                    ':apellido' => $_POST['apellido'], ':telefono' => $_POST['telefono'],
                                    ':email' => $_POST['email'], ':direccion' => $_POST['direccion']))) 
                                    ? 'Contacto agregado' : 'Error al registrar'; 
        } catch (PDOException $e) {
            $_SESSION['message'] = $e->getMessage();
        }
        $database -> cerrar();
    } else {
        $_SESSION['message'] = 'Rellene el formulario';
    }
    header('location: index.php');
