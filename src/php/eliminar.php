<?php

    require_once 'index.php';
    require_once 'crud.php';

    $id = $_GET['idcontacto'];

    $obj = new metodos();
    if($obj->EliminarDatos($id) == 1){
        header("location:http://127.0.0.1/CRUD/");
    }else{
        echo "Error al eliminar contacto";
    }

?>