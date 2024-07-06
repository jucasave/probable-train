<?php
    session_start();
    include_once('conexion.php');
    if (isset($_GET['id'])) {
        $database = new ConectarDB();
        $db = $database->abrir();
        try {
            $sql = "DELETE FROM personas WHERE idPersona = '".$_GET['id']."'";
            $_SESSION['message'] = ($db->exec($sql)) ? 'Contacto Eliminado Correctamente' : 'No se puede eliminar el contacto'; 
        } catch (PDOException $e) {
            $_SESSION['message'] = $e->getMessage();
        }
        $database -> cerrar();
    } else {
        $_SESSION['message'] = 'Seleccione el contacto a eliminar';
    }
    header('location: index.php');
