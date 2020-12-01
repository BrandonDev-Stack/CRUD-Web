<?php

    class metodos{
        public function MostrarDatos($sql){
            $select=new Conexiondb();
            $Conexion=$select->Conexion();

            $result=mysqli_query($Conexion, $sql);
            
            return mysqli_fetch_all($result,MYSQLI_ASSOC);

        }

        public function InsertarDatos($datos){
            $select=new Conexiondb();
            $Conexion=$select->Conexion();

            $sql = "INSERT INTO tbcontactos (NombreC, Edad, Celular, Email, FechaA) 
                        VALUES ('$datos[0]', '$datos[1]', '$datos[2]', '$datos[3]', CURTIME())";

            return $result=mysqli_query($Conexion, $sql);
        }

        public function ModificarDatos($datos){
            $select=new Conexiondb();
            $Conexion=$select->Conexion();

            $sql = "UPDATE tbcontactos SET NombreC ='$datos[0]', Edad = '$datos[1]', Celular = '$datos[2]',
                        Email = '$datos[3]' 
                        WHERE idcontacto = '$datos[4]'";
            return $result = mysqli_query($Conexion, $sql);
        }

        public function EliminarDatos($id){
            $select=new Conexiondb();
            $Conexion=$select->Conexion();

            $sql ="DELETE FROM tbcontactos WHERE idcontacto = '$id'";

            return $result = mysqli_query($Conexion, $sql);
        }
    }
?>