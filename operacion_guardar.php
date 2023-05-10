<?php 
include("cnexion.php");

$Nombre= $_POST['Nombre'];
$ApellidoP= $_POST['ApellidoP'];
$Correo= $_POST['Correo'];
$Telefono= $_POST['Telefono'];
$Edad= $_POST['Edad'];
$Usuario= $_POST['Usuario'];

$query="INSERT INTO warzone (Nombre,ApellidoP,Correo,Telefono,Edad,Usuario) VALUES ('$Nombre','$ApellidoP','$Correo','$Telefono','$Edad','$Usuario')";
$resultado= $conexion->query($query);

if($resultado){
    header("Location: tabla.php");
}else{
    echo"no se inserso";
}
?>