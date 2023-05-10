<?php 
include("cnexion.php");
$id = $_REQUEST['id'];

$query="DELETE FROM warzone WHERE id='$id'";
$resultado= $conexion->query($query);

if ($resultado) {
    header("Location: tabla.php");
}else{
    echo"no ce incerso";
}
?>