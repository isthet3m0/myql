<?php 
include("cnexion.php");

$id=$_REQUEST['id'];
$Nombre= $_POST['Nombre'];
$ApellidoP= $_POST['ApellidoP'];
$Correo= $_POST['Correo'];
$Telefono= $_POST['Telefono'];
$Edad= $_POST['Edad'];
$Usuario= $_POST['Usuario'];

$query="UPDATE warzone SET Nombre='$Nombre',ApellidoP='$ApellidoP',Correo='$Correo',Telefono='$Telefono',Edad='$Edad',Usuario='$Usuario' WHERE id='$id'";
$resultado= $conexion->query($query);

if ($resultado) {
    header("Location: tabla.php");
}else{
    echo"no inserso";
}
?>