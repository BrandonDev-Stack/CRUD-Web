<?php

    require_once 'index.php';
    require_once 'crud.php';

    $nombreC = $_POST['NombreC'];
    $edad = $_POST['Edad'];
    $celular = $_POST['Celular'];
    $email = $_POST['Email'];

    $datos = array(
        $nombreC,
        $edad,
        $celular,
        $email
    );

    $obj = new metodos();
    if($obj->InsertarDatos($datos) == 1){
        header("location:http://127.0.0.1/CRUD/");
    }else{
        echo "fallo al agregar nuevo contacto";
    }

?>