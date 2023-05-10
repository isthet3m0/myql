<?php 
$conexion = new mysqli("localhost","root","temito124","21progb447");

if ($conexion) {
    echo"estas en linea...";
}else{
    echo"no estas en linea";
}
?>