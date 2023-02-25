<?php

include("conexion.php");
$con=conectar();

$ciudad=$_POST['ciudad'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];

$sql="INSERT INTO alumnos (ciudad,nombre,apellido,email,estado) VALUES ('$ciudad','$nombre','$apellido','$email','1')";
$query= mysqli_query($con,$sql);

if($query){
    Header("Location:alumno.php");
    
}else {

}
?>