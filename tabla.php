<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hola que tal</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
        <table border="3">
            <thead>
                <tr>
                <th colspan="1"><a href="index.html">Nuevo</a></th>
                <th colspan="5">Lista de Usuarios</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>id</td>
                    <td>Nombre</td>
                    <td>ApellidoP</td>
                    <td>Correo</td>
                    <td>Telefono</td>
                    <td>Edad</td>
                    <td>Usuarios</td>
                    <td colspan="2">Operaciones</td>
                </tr>
                <?php
                include("cnexion.php");

                $query="SELECT * FROM warzone";
                $resultado= $conexion->query($query);
                while($row=$resultado->fetch_assoc()){
                    ?>
                    <tr>
                        <td><?php echo $row['id'];?></td>
                        <td><?php echo $row['Nombre'];?></td>
                        <td><?php echo $row['ApellidoP'];?></td>
                        <td><?php echo $row['Correo'];?></td>
                        <td><?php echo $row['Telefono'];?></td>
                        <td><?php echo $row['Edad'];?></td>
                        <td><?php echo $row['Usuario'];?></td>
                        <td><a href="modificar.php?id=<?php echo $row['id'];?>">Modificar</a></td>
                        <td><a href="eliminar.php?id=<?php echo $row['id'];?>">Eliminar</a></td>
                    </tr>
                    <?php

                }
                ?>

            </tbody>
        </table>
    </center>
</body>
</html>