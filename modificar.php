<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Warzone5</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <center>
    <?php
               $id=$_REQUEST['id'];

                include("cnexion.php");

                $query="SELECT * FROM warzone WHERE id='$id'";
                $resultado= $conexion->query($query);
                $row=$resultado->fetch_assoc();
    ?>
        <form action="modificar_proceso.php?id=<?php echo $row['id'];?>" method="POST">
            <br>
            <br>
            <input type="text" required name="Nombre" placeholder="Nombre" value="<?php echo $row['Nombre'];?>">
            <br>
            <br>
            <input type="text"required name="ApellidoP" placeholder="ApellidoP" value="<?php echo $row['ApellidoP'];?>">
            <br>
            <br>
            <input type="text"required name="Correo" placeholder="Correo" value="<?php echo $row['Correo'];?>">
            <br>
            <br>
            <input type="text" required name="Telefono" placeholder="Telefono" value="<?php echo $row['Telefono'];?>">
            <br>
            <br>
            <input type="text" required name="Edad" placeholder="Edad" value="<?php echo $row['Edad'];?>">
            <br>
            <br>
            <input type="text" required name="Usuario" placeholder="Usuario" value="<?php echo $row['Usuario'];?>">
            <br>
            <br>
            <input type="submit" value="Aceptar" id="cuw">
        </form>
    </center>
</body>
</html>