<?php
    require_once '../php/index.php';
    $select=new Conexiondb();
    $Conexion=$select->Conexion();
    $id = $_GET['idcontacto'];
    $sql = "SELECT NombreC, Edad, Celular, Email FROM tbcontactos WHERE idcontacto = '$id' ";
    $resul = mysqli_query($Conexion, $sql);
    $obtener = mysqli_fetch_row($resul);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/index.css">
    <link rel="stylesheet" href="../bootstrap/css/bootstrap.css">
    <title>Editar</title>
</head>

<body background="../img/icono.png">
    <div class="editardatos">
        <form method="POST" id="frmdatos" action="../php/editar.php">
            <table align="center">
                <tr>
                    <td>
                        <input type="text" hidden="" value="<?php echo $id?>" name="id">
                    </td>
                </tr>
                <tr>
                    <td><label>Nombre Completo</label></td>
                    <td><input type="text" name="NombreC" id="NombreC" value="<?php echo $obtener[0] ?>"></td>
                </tr>
                <tr>
                    <td><label>Edad</label></td>
                    <td><input type="number" name="Edad" id="Edad" value="<?php echo $obtener[1] ?>">></td>
                </tr>
                <tr>
                    <td><label>Celular</label></td>
                    <td><input type="text" name="Celular" id="Celular" value="<?php echo $obtener[2] ?>">></td>
                </tr>
                <tr>
                    <td><label>Correo Electronico</label></td>
                    <td><input type="text" name="Email" id="Email" value="<?php echo $obtener[3] ?>">></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" id="btn-guardar" class="btn btn-success btn-block" /></td>
                </tr>
            </table>
        </form>
    </div>
</body>

</html>

<style>
.tablas {
    background-color: black;
    opacity: 0.7;
}

.tablas th {
    color: white;
}

td {
    color: white;
}

label {
    color: white;
    font-size: 20px;
}

form {
    padding-top: 20px;
}

td {
    padding-bottom: 15px;
}

input {
    background-color: black;
    opacity: 0.7;
    color: white;
}

.editardatos {
    background-color: black;
    opacity: 0.7;
    padding-bottom: 20px;
    margin: 0 auto;
    left: 0;
    right: 0;
    width: 500px;
    text-align: right;
}
</style>