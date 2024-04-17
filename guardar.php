<?php 
include('conexion.php');

$a=$_REQUEST['nombre'];
$b=$_REQUEST['apellido'];
$c=$_REQUEST['telefono'];
$d=$_REQUEST['fecha'];
$e=$_REQUEST['hora'];


$ins="SELECT * FROM turno WHERE (fecha ='$d' AND hora ='$e') OR (telefono = '$c' AND DATE (fecha) > DATE (NOW()))";
$res=$con->query($ins);
//SIRVE PARA SABER LA CANTIDAD DE REGISTROS ENCONTRADOS ->NUM_ROWS
if ($res->num_rows>0) {
    echo "turno tomado";
}else {
    

//consulta
$ins= "INSERT INTO turno (nombre, apellido, telefono, fecha, hora) VALUES ('$a', '$b', $c, '$d', '$e')";
//ejecutar la consulta
$con->query($ins);
}









?>