<?php
    class Conexiondb{
        private $host = "localhost";
        private $user = "root";
        private $Key = "";
        private $database = "contactos";
        
        public function Conexion(){
            $Conexion=mysqli_connect($this->host, $this->user, $this->Key, $this->database);
            return $Conexion;
        }
        
    }
?>