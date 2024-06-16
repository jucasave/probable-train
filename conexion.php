<?php
    class ConectarDB{
        private $server = "mysql: host=localhost; dbname=agendap";
        private $user = "root";
        private $pass = "";
        private $opciones = array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
                                PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC);

        protected $conn;

        public function abrir(){
            try {
                //code...
                $this->conn = new PDO($this->server, $this->user, $this->pass, $this->opciones);
                return $this -> conn;
            } catch (PDOException $e) {
                echo "Error al conectarse: ".$e->getMessage();
            }
        }
        
        public function cerrar(){
            $this->conn = null;
        }
    }
