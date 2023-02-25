<?php

include("conexion.php");
$con=conectar();

$ciudad=$_POST['ciudad'];
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$email=$_POST['email'];

$sql="UPDATE alumnos SET  ciudad='$ciudad',nombre='$nombre',apellido='$apellido' WHERE email='$email'";
$query=mysqli_query($con,$sql);

    if($query){
        Header("Location: alumno.php");
    }
?>