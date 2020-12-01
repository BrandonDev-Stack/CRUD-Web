<!-- 
    |-------CRUD PHP aplicando POO con base de datos MySQL en servidor Xampp--------|
        @autor = Brandon Jesus Hernandez Arias
        @version = 1.0
        @Año de termino = 2020
        El script de la base de datos viene dentro de la caperta src/DataBase_Script
    |-------------------------------------------------------------------------------|
-->

<?php
    require_once 'src/php/index.php';
    require_once 'src/php/crud.php';
?>
<!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="src/bootstrap/css/bootstrap.css">
        <link rel="stylesheet" href="src/css/index.css">
        <title>CRUD PHP POO</title>
    </head>

    <body background="src/img/icono.png">
        <div class="container">
            <div class="btnagregar">
                <a href="http://127.0.0.1/CRUD/src/html/insertar.html" " class="btn btn-success ">Nuevo contacto</a>
        </div>
    </div>
    <div class="container ">
        <div class="tablas ">
            <table class="table ">
                <thead>
                    <tr>
                        <th>Nombre Completo</th>
                        <th>Edad</th>
                        <th>Celular</th>
                        <th>Correo</th>
                        <th>Fecha de alta</th>
                        <th style="text-align: center">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $obj = new metodos();
                        $sql = "SELECT idcontacto, NombreC, Edad, Celular, Email, FechaA FROM tbcontactos ";
                        $data = $obj->MostrarDatos($sql);
                        foreach ($data as $key) {
                    ?>
                    <tr>
                        <td style="color: white; "><?php echo $key['NombreC']?></td>
                        <td style="color: white; "><?php echo $key['Edad']?></td>
                        <td style="color: white; "><?php echo $key['Celular']?></td>
                        <td style="color: white; "><?php echo $key['Email']?></td>
                        <td style="color: white; "><?php echo $key['FechaA']?></td>
                        <td colspan="2">
                            <a href="src/html/editar.php?idcontacto=<?php echo $key['idcontacto']?>" class="btn btn-warning">Actualizar</a>
                            <a href="src/php/eliminar.php?idcontacto=<?php echo $key['idcontacto']?>" class="btn btn-danger">Eliminar</a>
                        </td>
                    </tr>
                    <?php
                        }
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>

</html>